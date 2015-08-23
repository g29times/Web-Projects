var exec = require("child_process").exec;

// 核心变换 相对采用将内容传递给服务器的方式，我们这次采用将服务器“传递”给内容的方式。
function start(response) {
  console.log("Request handler 'start' was called.");
  // var content = "empty";
	
  // 思考 作者采用exec作为异步示范 可否自己写一个异步耗时方法
  exec("find /", { timeout: 10000, maxBuffer: 20000*1024 }, function (error, stdout, stderr) {
    // content = stdout;
	response.writeHead(200, {"Content-Type": "text/plain"});
    response.write(stdout);
    response.end();
  });
  
  // return content;
  /*function sleep(milliSeconds) {
    var startTime = new Date().getTime();
    while (new Date().getTime() < startTime + milliSeconds);
  }

  sleep(10000);
  return "Hello Start";*/
}

function upload(response) {
  console.log("Request handler 'upload' was called.");
  // return "Hello Upload";
  response.writeHead(200, {"Content-Type": "text/plain"});
  response.write("Hello Upload");
  response.end();
}

exports.start = start;
exports.upload = upload;