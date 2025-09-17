<?php
class DogApi{
    private $baseUrl;
    private $apiKey;

    public function __construct($baseUrl, $apiKey){
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
    }

    private function request($endpoint){
        $url =$this->baseUrl . $endpoint . "&api_key=" . $this->apiKey;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

        $response = curl_exec($ch);

        if(curl_errno($ch)){
            echo "Error Found: " . curl_error($ch);
        }
        curl_close($ch);

        return json_decode($response, true);
    }

    public function getRandomDogs($limit=5){
        try {
            $data = $this->request("/images/search?limit=" . intval($limit));
            return $data ?? [];
        } catch(Exception $e){
            echo "<p>API Error: " . $e->getMessage() . "</p>";
            return [];
        }
    }
}
?>