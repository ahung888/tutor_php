<?php

// class Homepage {

//     function render($content) {

//       echo $content;

//     }
// }

// $content = '<h1>Hello World</h1>';
// $page = new Homepage();
// $page->render($content);


// 隨堂測驗

// 第二次
// class Dog{

//   var $voice = '';

//   function bark(){
//     echo $this->voice;
//   }
// }

// class DogSon extends Dog{
//   var $voice = 'meow~';
// }

// $yellowDog = new Dog();

// $yellowDog->voice = 'My fur is yellow.';
// $yellowDog->bark();

// $yellowDog = new DogSon();
// $yellowDog->bark();

// $blackDog = new DogSon();
// $blackDog->voice = '口黑口黑';
// $blackDog->bark();

// 第三次
// Class YellowDog{
//   var $voice ="My fur is yellow.";
//   var $blackVoice ='口黑口黑';
//   function bark(){
//     echo "The yellow dog bark:" . $this->voice;
//   }
// }
// Class WhiteDog extends YellowDog{
//   var $voice ='meow~';
//   function bark(){
//     echo "The whiteDog dog bark:" . $this->voice;
//   }

// }
// Class BlackDog extends WhiteDog{

//   function bark(){
//     echo "The whiteDog dog bark:" . $this->blackVoice;
//   }
// }
// $yellowDog = new YellowDog();
// $whiteDog = new WhiteDog();
// $blackDog = new blackDog();


// $yellowDog->bark();
// echo '<br>';
// $whiteDog->bark();
// echo '<br>';
// $blackDog->bark();


class Dogs{

  var $voice = '汪汪';

  function bark(){

    echo "The dog bark:" . $this->voice;

  }
}


Class YellowDog extends Dogs{
  var $voice ="My fur is yellow.";

  function bark(){
    echo "The YellowDog bark:" . $this->voice;
  }
}
Class WhiteDog extends Dogs{
  var $voice ="meow~";
}
Class BlackDog extends Dogs{
  var $voice ="口黑口黑";
}

$yellowDog = new YellowDog;
$whiteDog = new WhiteDog;
$blackDog = new BlackDog;

$yellowDog->bark();
$whiteDog->bark();
$blackDog->bark();

?>