

require('./bootstrap');

const axios = require("axios");

const form = document.getElementById('form');
const inputMessage = document.getElementById('input-message');

form.addEventListener('submit', function(event){
    event.preventDefault()
    const userInput = inputMessage.value
    const params = {
        message:userInput
    }
    // console.log(axios)

    axios.post('/chat-message', params)
})

const channel = Echo.channel('public.chat.1');


channel.subscribed(()=> {
    console.log('subscribed!!!');
}).listen('.chat-message',(event)=> {
    console.log(event)
})
