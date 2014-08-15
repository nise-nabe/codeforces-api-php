codeforces-api-php
==================

Codeforces API Wrapper For PHP 

see more detail API http://codeforces.com/api/help

## Usage

Example
```
$client = new Codeforces\Api\Client();
var_dump($client->userInfo('nise_nabe'));
```

Output
```
array(2) {
  'status' =>
  string(2) "OK"
  'result' =>
  array(1) {
    [0] =>
    array(9) {
      'handle' =>
      string(9) "nise_nabe"
      'country' =>
      string(5) "Japan"
      'contribution' =>
      int(0)
      'rank' =>
      string(6) "newbie"
      'rating' =>
      int(1169)
      'maxRank' =>

      string(6) "expert"
      'maxRating' =>
      int(1657)
      'lastOnlineTimeSeconds' =>
      int(1408119476)
      'registrationTimeSeconds' =>
      int(1267685668)
    }
  }
}
```
