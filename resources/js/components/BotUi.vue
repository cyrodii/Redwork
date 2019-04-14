<script>
    import BotUI from 'botui'
    const bot = new BotUI('quote-bot');
    const axios = require('axios');

    let name,
        email,
        siteNeedsValues = [],
        siteNeedsText = [],
        cost = 0;

    let slightDelay = 1000,
        largeDelay = 2000;

    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }

    /* Initiating the conversation */
    if(getUrlVars()['first_name']){
        name = getUrlVars()['first_name'];
        bot.message.bot({
            content: 'Ahh, so you must be '+ name + ', correct?'
        }).then(()=> {
            return bot.action.button({
                delay: slightDelay,
                addMessage: false, 
                action: [{
                    text: 'You are correct',
                    value: true
                }, {
                    text: 'Who the hell is '+ name + '?',
                    value: false
                }]
            }).then((res) => {
                if(res.value){
                    bot.message.human({
                        content: res.text
                    }).then(() => {
                        bot.message.bot({
                            loading: true,
                            delay: slightDelay,
                            content: 'Perfect! Alright '+ name +', Let\'s think about what else we need...'
                        }).then(() => {
                            askEmail();
                        })
                    })
                } else {
                    bot.message.human({
                        content: res.text
                    }).then(() => {
                        bot.message.bot({
                            loading: true,
                            delay: slightDelay,
                            content: 'Oops, my bad. What was your name again?'
                        }).then(() => {
                            return bot.action.text({
                                delay: slightDelay,
                                action: {
                                    size: 30,
                                    placeholder: 'Your name here',
                                }
                            }).then((res) => {
                                name = res.value;
                                bot.message.bot({
                                    loading: true,
                                    delay: slightDelay,
                                    content: 'We\'re sorry about that ' + name + '. Hopefully we didn\'t disappoint you this early on. What else do we need from you...'
                                }).then(() => {
                                    askEmail();
                                })
                            })
                        })
                    })
                }
            })
        })
    } else {
        bot.message.bot({
                content: 'Would you like some help with a quote today?'
            }).then(function (){
                return bot.action.button({
                    delay: slightDelay,
                    addMessage: false,
                    action: [{
                        text: 'I am looking for a quote!',
                        value: true
                    }, {
                        text: 'I\'m just browsing around, maybe later.',
                        value: false
                    }]
                })
            }).then(function (res) {
                if(res.value) {
                    bot.message.human({
                        content: res.text
                    });
                    startConversation();
                } else {
                    bot.message.human({
                        content: res.text
                    });            
                    endConversation();
                }
            });  
    }
    
    /* Starting the conversation */
    let startConversation = function (){
        bot.message.bot({
            loading: true,
            delay: slightDelay,
            content: 'Awesome! Let\'s get started then.'
        }).then(function () {
            bot.message.bot({
                loading: true,
                delay: slightDelay,
                content: 'Let\'s get on a first name basis. I\'m a bot from RedWork, and you are?'
            })
            askName();
        });
    }

    /* Asking their name */ 
    let askName = function () {
        return bot.action.text({
            delay: slightDelay,
            action: {
                size: 30,
                placeholder: 'Your name here.',
            }
        }).then(function (res) {
            name = res.value;
            bot.message.bot({
                loading: true,
                delay: slightDelay,
                content: 'All right, ' + name + '. Let\'s think about what else we need...'
            }).then(function () {
             askEmail();
        })
        });
    }

    /* Asking for their email */
    let askEmail = function () {
            bot.message.bot({
                loading: true,
                delay: slightDelay,
                content: 'Ahh... an email. What email would you like to use?'
            }).then(function () {
                return bot.action.text({
                    action: {
                        size: 30,
                        sub_type: 'email',
                        placeholder: 'Your email here.',
                    }                    
                })
            }).then(function (res) {
            email = res.value;
            bot.message.bot({
                loading: true,
                delay: slightDelay,
                content: 'Excellent, '+ name + '. We are going to use '+ email +' as the email to contact you by.'
            }).then(function () {
                siteNeeds();
            })
        });
    }

    /* Why they want this site*/
    let siteNeeds = function () {
        bot.message.bot({
            loading: true,
            delay: slightDelay,
            content: 'Give us some clues as to what you want:'
        }).then(function () {
            window.scrollBy(0, 100);
            bot.action.select({
            action: {
                placeholder : "Select all that apply", 
                value: '', 
                multipleselect : true,
                options : [
                                {value: 90, text : "I need to build awareness for my brand" },
                                {value: 70, text : "I need to offer a contact point to my clients" },
                                {value: 80, text : "I need my company to have a better image online" },
                                {value: 170, text : "I need to sell my product/service through my site  " },
                                {value: 70, text : "I need to use it to build customer loyalty" },
                                {value: 130, text : "I need to reach people in many languages" },
                                {value: 160, text : "I need somewhere to promote my latest product/service    " },
                            ],
                button: {
                    icon: 'check',
                    label: 'OK'
                }
            }
            }).then(function (res) {
                console.log('hello');
                siteNeedsValues = res.value.split(",").map(Number);
                siteNeedsText = res.text.split(",")
                console.log(siteNeedsValues);
                    end();
            });
        });
    }

    /* Cost calculations*/
    let calculateCost = function () {
        siteNeedsValues.forEach((item) => {
            cost = cost + item
        });
    }

    /* Ending the conversation and submitting */
    let end = function () {
        calculateCost();
        bot.message.bot({
            loading: true,
            delay: slightDelay,
            content: "Thank you for your time "+ name + ". It's much appreciated."
        }).then(function () {
            bot.message.bot({
               loading: true,
                delay: slightDelay,
                content: "Our estimated quote for your website is $"+ cost + "! If you'd like a more accurate quote and to get in contact with one of our developers we could set that up for you."             
            }).then(function () {
                bot.message.bot({
                    loading: true,
                    delay: slightDelay,
                    content: "So what do ya say, give it a shot?"
                }).then(function () {
                    return bot.action.button({
                        delay: slightDelay,
                        addMessage: false, 
                        action: [{
                            text: 'Hell Yeah!',
                            value: true
                        }, {
                            text: 'Maybe another time.',
                            value: false
                        }]
                    })
                }).then(function (res) {
                    if(res.value){
                        bot.message.human({
                            content: res.text
                        });                                
                        axios.post('/quote', {
                            name: name,
                            email: email,
                            siteNeeds: siteNeedsText,
                            cost: cost,
                        })
                        .then(function (response) {
                            bot.message.bot({
                                loading: true,
                                delay: slightDelay,
                                content: 'Your quote has been submitted! Thank you for giving us a shot to make your dreams come true.'
                            })
                            console.log(response.data);
                        })
                        .catch(function (error) {
                            pitchError('Something went wrong when trying to submit your quote.');
                            console.log(error);
                        });
                    } else {
                        bot.message.human({
                            content: res.text
                        }).then(() => {
                            bot.message.bot({
                                loading: true,
                                delay: slightDelay,
                                content: "Well, It was nice talking to you "+ name + ". We hope to see you soon."
                            }).then(() => {
                                setTimeout(function(){window.location.replace('/')}, 3000)
                            })
                        })
                    }
                })
            })
        })
    }

    /* Return any errors from getPitch() */
    let pitchError = function (text) {
        bot.message.bot({
            loading: true,
            delay: slightDelay,
            content: text
        });
    }

    /* Ending the conversation */
    let endConversation = function () {
        bot.message.bot({
            loading: true,
            delay: largeDelay,
            content: 'Well, I\'ll always be here if you\'re looking for a quote.'
        }).then( function() {
            return bot.action.button({
                addMessage: false,
                action: [{
                    text: 'Wait!! I\'ve changed my mind!',
                    value: true
                }]
            }).then(function (res) {
                if(res.value){
                    bot.message.human({
                        content: res.text
                    });                    
                    startConversation();
                }
            });
        });
    }
</script>