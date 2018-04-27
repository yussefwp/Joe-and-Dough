var Nightmare = require('nightmare');

var nightmare = Nightmare({ show: false, waitTimeout: 30000 });


var name = 'anngould@iastate.edu';
var pass = 'awesome'

nightmare

  .goto('http://proj-319-b1.cs.iastate.edu/create_user/login.html')
  .type('#user_email', name)
  .type('#user_pass', pass)
  .click('#submit')
  .wait(3000)

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () {

    return document.querySelector('#view_orders');

  })

  .end()

  //allows to print results
  .then(function (result) {

    if(result == 'View Available Orders'){
      console.log("true. Log in successful for user: " + name);
    }
    else{
      console.log("false. Correct log in failure");
    }

  })

  .catch(function (error) {

    console.error('Log in failed:', error);

  });
