//It works
var Nightmare = require('nightmare');
var nightmare = Nightmare({ show: true, waitTimeout: 30000 });
var email = 'alvila@iastate.edu'
var password = 'hello123'
var name = 'Armando'
var shop = 'Starbucks'


nightmare
  .goto('file:///Users/armandovila/Dropbox/spring2018/SE319_PROJECT/B1/deliveries/start_delivery.html')
  .type('#location', shop)
  .type('#delivtime', '200PM')
  .type('#order_limit', '1')
  .click('#submit')
  .wait(3000)

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () {
    return document.querySelector('#success')
})

  .end()

  //allows to print results
  .then(function (result) {
    console.log("It works!");
  })

  .catch(function (error) {
    console.error('Search failed:', error);
  });
