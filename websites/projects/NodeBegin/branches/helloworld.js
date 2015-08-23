console.log("Hello World");

function say(word) {
  console.log(word);
}

function execute1(someFunction, value) {
  someFunction(value);
}

execute1(say, "Hello");

function execute2(someFunction, value) {
  someFunction(value);
}

execute2(function(word){ console.log(word) }, "Hello");