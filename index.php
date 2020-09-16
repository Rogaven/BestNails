<?php
header('Content-Type: application/json');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$data = [
["title" => "google.com", "link" => "https://google.com"],
["title" => "ya.ru", "link"  => "https://ya.ru"],
["title" => "worldslongestwebsite", "link"  => "http://www.worldslongestwebsite.com"],
["title" => "foo", "link"  => "https://foo.me"],
["title" => "ya/ff", "link"  => "http://ya.ru/fff"],
["title" => "bar", "link"  => "http://bar.xyz"],
["title" => "local", "link"  => "http://localhost:4567/"],
["title" => "blog.pusher.com", "link"  => "https://blog.pusher.com/quick-nimble-testing-ios/"],
["title" => "medium.com/@lawrey", "link"  => "https://medium.com/@lawrey/quick-nimble-with-swift-3-1-af8ece804903"],
["title" => "www.appcoda.com", "link"  => "https://www.appcoda.com/tdd-quick-nimble/"],
["title" => "niffic.se/2019", "link"  => "https://niffic.se/2019/04/data-driven-unit-tests-in-swift-using-quick-nimble/"],
["title" => "useyourloaf.com/blog", "link"  => "https://useyourloaf.com/blog/swift-non-nil-values-in-an-array-of-optionals/"],
["title" => "medium.com/panya", "link"  => "https://medium.com/panya-studio-engineering/filtering-nil-values-out-of-the-collection-types-swift-2297665f9eac"],
["title" => "m.habr.com", "link"  => "https://m.habr.com/ru/post/501030/"],
["title" => "vc.ru/media", "link"  => "https://vc.ru/media/126241-telegram-obyavil-vtoroy-etap-konkursa-na-sozdanie-algoritma-dlya-ranzhirovaniya-novostey-s-prizovym-fondom-100-tysyach"],
["title" => "www.swiftbysundell.com", "link"  => "https://www.swiftbysundell.com/articles/caching-in-swift/"],
["title" => "medium.com/ios", "link"  => "https://medium.com/ios-os-x-development/caching-anything-in-ios-102176e46eba"],
["title" => "github.com/hyperoslo", "link"  => "https://github.com/hyperoslo/Cache"],
["title" => "github.com/Haneke", "link"  => "https://github.com/Haneke/HanekeSwift"],
["title" => "habr.com/ru", "link" => "https://habr.com/ru/post/272393/"],
["title" => "realm.io/docs", "link"  => "https://realm.io/docs/swift/latest/"],
["title" => "www.raywenderlich.com", "link"  => "https://www.raywenderlich.com/9220-realm-tutorial-getting-started"],
["title" => "auth0.com/docs", "link"  => "https://auth0.com/docs/quickstart/native/ios-swift-facebook-login/00-login-facebook"],
["title" => "firebase.google.com", "link"  => "https://firebase.google.com/docs/auth/ios/facebook-login?hl=ru"],
["title" => "developers.facebook.com", "link"  => "https://developers.facebook.com/docs/facebook-login/ios"],
["title" => "developer.apple.com", "link"  => "https://developer.apple.com/library/archive/documentation/MacOSX/Conceptual/BPInternational/MaintaingYourOwnStringsFiles/MaintaingYourOwnStringsFiles.html"],
["title" => "github.com/SwiftGen", "link"  => "https://github.com/SwiftGen/SwiftGen#strings"],
["title" => "github.com/wayne5540", "link"  => "https://github.com/wayne5540/swift-fb-login-example/blob/master/FacebookLogin/ViewController.swift"],
["title" => "developers.facebook.com", "link"  => "https://developers.facebook.com/apps/513766485973331/settings/basic/"],
];
$a = array_slice($data, 0, 10+time() % 10);
shuffle($a);
echo json_encode($a);
