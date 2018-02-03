<?php
require 'vendor/autoload.php';

	$token['iss'] = "https://login.auth0.com/";
    $token['sub'] = "github|178512";
    $token['aud'] = "KgSjMN3OCwmrjvtjJ8bfuZyAaoKOrgH3";
    $token['exp'] = "1382747118";
    $token['iat'] = "1382711118";
    $token['blog'] = "http://twitter.com/jfroma";
    $token['clientID'] = "KgSjMN3OCwmrjvtjJ8bfuZyAaoKOrgH3";
    $token['created_at'] = "2013-10-24T01:09:42.042Z";
    $token['email'] = "jfromaniello@gmail.com";
    $token['events_url'] = "https://api.github.com/users/jfromaniello/events{/privacy}";
    $token['followers'] = "48";
    $token['followers_url'] = "https://api.github.com/users/jfromaniello/followers";
    $token['following'] = "27";
    $token['following_url'] = "https://api.github.com/users/jfromaniello/following{/other_user}";
    $token['gists_url'] = "https://api.github.com/users/jfromaniello/gists{/gist_id}";
    $token['gravatar_id'] = "d1a7e0fbfb2c1d9a8b10fd03648da78f";
    $token['hireable'] = "";
    $token['html_url'] = "https://github.com/jfromaniello";
    $token['identities'] = array(
		'access_token' => "b96bddd8924a6fbcf0aed19c1accac6509b88df2",
		'provider' => "github",
		'user_id' => "178512",
		'connection' => "github",
		'isSocial' => "1",
	);

    $token['location'] = "Córdoba, Argentina";
    $token['name'] = "José F. Romaniello";
    $token['nickname'] = "jfromaniello";
    $token['organizations_url'] = "https://api.github.com/users/jfromaniello/orgs";
    $token['picture'] = "https://2.gravatar.com/avatar/d1a7e0fbfb2c1d9a8b10fd03648da78f?d=https%3A%2F%2Fidenticons.github.com%2F3752dbc5bc62c01fb63aa74c3da28097.png&r=x";
    $token['public_gists'] = "202";
    $token['public_repos'] = "119";
    $token['received_events_url'] = "https://api.github.com/users/jfromaniello/received_events";
    $token['repos_url'] = "https://api.github.com/users/jfromaniello/repos";
    $token['site_admin'] = "";
    $token['starred_url'] = "https://api.github.com/users/jfromaniello/starred{/owner}{/repo}";
    $token['subscriptions_url'] = "https://api.github.com/users/jfromaniello/subscriptions";
    $token['type'] = "User";
    $token['updated_at'] = "2013-10-24T14:56:41Z";
    $token['url'] = "https://api.github.com/users/jfromaniello";
    $token['user_id'] = "github|178512";

// echo "<pre>";
// print_r($token);
// echo "</pre>"; 

$header["typ"] = "JWT";
$header["alg"] = "HS256";

// echo base64_decode('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9');
// echo "<br/>---------------------------------<br/>";
// $key = '5yy6vCe0ChxadKGsVcX47VMCNZLBwWVrBLQdWeFJZ0_S2fLFi2o9wifuzE-U3MRX';
// echo base64_decode(strtr($key, '-_', '+/'));

echo $getToken = JWT::encode($token, 'secret_server_key');
echo "<br/><br/>----------------------------<br/><br/>";
$decoded =  JWT::decode($getToken, 'secret_server_key');
echo "<pre>";
print_r($decoded);
echo "</pre>";
die;
// This is your id token
$token ='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2xvZ2luLmF1dGgwLmNvbS8iLCJzdWIiOiJnaXRodWJ8MTc4NTEyIiwiYXVkIjoiS2dTak1OM09Dd21yanZ0ako4YmZ1WnlBYW9LT3JnSDMiLCJleHAiOjEzODI3NDcxMTgsImlhdCI6MTM4MjcxMTExOCwiYmxvZyI6Imh0dHA6Ly90d2l0dGVyLmNvbS9qZnJvbWEiLCJjbGllbnRJRCI6IktnU2pNTjNPQ3dtcmp2dGpKOGJmdVp5QWFvS09yZ0gzIiwiY3JlYXRlZF9hdCI6IjIwMTMtMTAtMjRUMDE6MDk6NDIuMDQyWiIsImVtYWlsIjoiamZyb21hbmllbGxvQGdtYWlsLmNvbSIsImV2ZW50c191cmwiOiJodHRwczovL2FwaS5naXRodWIuY29tL3VzZXJzL2pmcm9tYW5pZWxsby9ldmVudHN7L3ByaXZhY3l9IiwiZm9sbG93ZXJzIjo0OCwiZm9sbG93ZXJzX3VybCI6Imh0dHBzOi8vYXBpLmdpdGh1Yi5jb20vdXNlcnMvamZyb21hbmllbGxvL2ZvbGxvd2VycyIsImZvbGxvd2luZyI6MjcsImZvbGxvd2luZ191cmwiOiJodHRwczovL2FwaS5naXRodWIuY29tL3VzZXJzL2pmcm9tYW5pZWxsby9mb2xsb3dpbmd7L290aGVyX3VzZXJ9IiwiZ2lzdHNfdXJsIjoiaHR0cHM6Ly9hcGkuZ2l0aHViLmNvbS91c2Vycy9qZnJvbWFuaWVsbG8vZ2lzdHN7L2dpc3RfaWR9IiwiZ3JhdmF0YXJfaWQiOiJkMWE3ZTBmYmZiMmMxZDlhOGIxMGZkMDM2NDhkYTc4ZiIsImhpcmVhYmxlIjpmYWxzZSwiaHRtbF91cmwiOiJodHRwczovL2dpdGh1Yi5jb20vamZyb21hbmllbGxvIiwiaWRlbnRpdGllcyI6W3siYWNjZXNzX3Rva2VuIjoiYjk2YmRkZDg5MjRhNmZiY2YwYWVkMTljMWFjY2FjNjUwOWI4OGRmMiIsInByb3ZpZGVyIjoiZ2l0aHViIiwidXNlcl9pZCI6MTc4NTEyLCJjb25uZWN0aW9uIjoiZ2l0aHViIiwiaXNTb2NpYWwiOnRydWV9XSwibG9jYXRpb24iOiJDw7NyZG9iYSwgQXJnZW50aW5hIiwibmFtZSI6Ikpvc8OpIEYuIFJvbWFuaWVsbG8iLCJuaWNrbmFtZSI6Impmcm9tYW5pZWxsbyIsIm9yZ2FuaXphdGlvbnNfdXJsIjoiaHR0cHM6Ly9hcGkuZ2l0aHViLmNvbS91c2Vycy9qZnJvbWFuaWVsbG8vb3JncyIsInBpY3R1cmUiOiJodHRwczovLzIuZ3JhdmF0YXIuY29tL2F2YXRhci9kMWE3ZTBmYmZiMmMxZDlhOGIxMGZkMDM2NDhkYTc4Zj9kPWh0dHBzJTNBJTJGJTJGaWRlbnRpY29ucy5naXRodWIuY29tJTJGMzc1MmRiYzViYzYyYzAxZmI2M2FhNzRjM2RhMjgwOTcucG5nJnI9eCIsInB1YmxpY19naXN0cyI6MjAyLCJwdWJsaWNfcmVwb3MiOjExOSwicmVjZWl2ZWRfZXZlbnRzX3VybCI6Imh0dHBzOi8vYXBpLmdpdGh1Yi5jb20vdXNlcnMvamZyb21hbmllbGxvL3JlY2VpdmVkX2V2ZW50cyIsInJlcG9zX3VybCI6Imh0dHBzOi8vYXBpLmdpdGh1Yi5jb20vdXNlcnMvamZyb21hbmllbGxvL3JlcG9zIiwic2l0ZV9hZG1pbiI6ZmFsc2UsInN0YXJyZWRfdXJsIjoiaHR0cHM6Ly9hcGkuZ2l0aHViLmNvbS91c2Vycy9qZnJvbWFuaWVsbG8vc3RhcnJlZHsvb3duZXJ9ey9yZXBvfSIsInN1YnNjcmlwdGlvbnNfdXJsIjoiaHR0cHM6Ly9hcGkuZ2l0aHViLmNvbS91c2Vycy9qZnJvbWFuaWVsbG8vc3Vic2NyaXB0aW9ucyIsInR5cGUiOiJVc2VyIiwidXBkYXRlZF9hdCI6IjIwMTMtMTAtMjRUMTQ6NTY6NDFaIiwidXJsIjoiaHR0cHM6Ly9hcGkuZ2l0aHViLmNvbS91c2Vycy9qZnJvbWFuaWVsbG8iLCJ1c2VyX2lkIjoiZ2l0aHVifDE3ODUxMiJ9.ZVdzRntRHoIK1VObdyoswFpRAuL5doCBa5rHZsZY_XQ';

// This is your client secret
$key = '5yy6vCe0ChxadKGsVcX47VMCNZLBwWVrBLQdWeFJZ0_S2fLFi2o9wifuzE-U3MRX';


$decoded = JWT::decode( $token, base64_decode(strtr($key, '-_', '+/')) );
echo "<pre>";
print_r($decoded);
echo "</pre>";
?>