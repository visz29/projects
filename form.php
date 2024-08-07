<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            width: 100vw;
            height: 100vh;
            background-color: rgba(40, 218, 197, 1);
            /* background-image: url(./assets/back1.jpeg); */
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            width: 95vw;
            height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: transparent;
            backdrop-filter: blur(3px);
            border: 1vw solid rgba(255, 255, 255, 0.422);
            border-radius: 3vw;
        }
        .lab{
            width: 90vw;
            height: 7vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
            transition: 0.3s;
            border-radius: 3vw;
            margin-top: 4vh;
            /* flex-direction: column; */
        }
        .lab:hover{
            background-color: rgba(134, 255, 255, 0.184);
            box-shadow: 0px 6px 20px 6px rgba(0, 0, 0, 0.251);
            transition: 0.3s;
        }
        .last:hover{
            background-color: transparent;
            box-shadow: none;
        }
        .pass{
            display: flex;    
        }
        h4{
            width: 35vw;
            height: 4vw;
            text-align: center;
            font-size: 4.5vw;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            color: azure;
        }
        .input{
            width: 40vw;
            height: 7vw;
            border-radius: 2vw;
            padding-left: 2vw;
            outline: none;
            border: none;
            background-color: rgba(240, 255, 255, 0.459);
        }
        #eye{
            background-image: url('./assets/eye_close.png');
            background-size: cover;
            width: 3vw;
            height: 3vw;
            border: none;
            border-radius: 1.2vw;
            transition: 0.3s;
        }
        #btn{
            width: 15vw;
            height: 5vw;
            border-radius:2vw;
            border: none;
            background-color: rgba(231, 222, 225, 0.537);
            margin-top: 4vh;
        }
    </style>
</head>
<body>
    <form action="" name="form1">
        <div class="lab" for="name"><h4>Name</h4><input type="text" name="name1" id="name" class="input"></div><br>
        <div class="lab" for="email"><h4>Email</h4> <input type="text" name="email" id="email" class="input"></div><br>
        <div class="lab" for="pass"><h4 style="margin-left: 3vw;">Password</h4><input type="password" name="pass" id="pass" class="input pass"><div id="eye"></div></div><br>
        <div class="lab" for="re_pass"><h4 style="margin-right: 2vw;">Re-Password</h4><input type="password" name="re_pass" id="re_pass" class="input"></div>
        <div for="" class="lab last"> <input type="submit" id="btn"></div>
    </form>
    <script>
        let name = this.form1.name1
            name.addEventListener('click',(e)=>{
                console.log(e);
            })
        let btn = document.querySelector('#btn')
        btn.addEventListener('click',(e)=>{
            
            //// name
            let name = this.form1.name1
            
            if(name.value == ''){
                name.style.border = '0.3vw solid red'
                e.preventDefault()
                console.log('enter');
            }
            else{
                name.style.border = 'none'
            }
            ///// Email
            let email = this.form1.email
            let res = email.value
            let ser = res.search('@gmail.com')   
            if(email.value == ''){
                email.style.border = '0.3vw solid red'
                
                e.preventDefault()
            }else if(ser == -1){
                email.style.border = '0.3vw solid red'
                e.preventDefault()
            }
            else{
                email.style.border = 'none'
            }

            //// pass
            let pass = this.form1.pass
            if(pass.value == ''){
                pass.style.border = '0.3vw solid red'
                e.preventDefault()
            }
            else{
                pass.style.border = 'none'
            }

            /// re-pass
            let re_pass = this.form1.re_pass
            if(pass.value != re_pass.value){
                re_pass.style.border = '0.3vw solid red'
                e.preventDefault()
            }
            else{
                re_pass.style.border = 'none'
            }
        })
        let c = 0
        let eye = document.getElementById('eye')
        eye.addEventListener('click',(e)=>{
            e.preventDefault()
            if(c == 0){
                eye.style.backgroundImage = 'url("./assets/eye_open.png")'
                pass.type = 'text'
                c = 1
            }
            else if(c == 1){
                eye.style.backgroundImage = 'url("./assets/eye_close.png")'
                pass.type = 'password'
                c = 0
            }
            
            
        })
        
    </script>
</body>
</html>