let height = 0;
    let weight = 0;
    let waist = 0;
    let chest = 0;
    let hips = 0;
    let heightError = document.getElementById('heightError');
    let weightError = document.getElementById('weightError');
    let waistError = document.getElementById('waistError');
    let chestError = document.getElementById('chestError');    
    let hipsError = document.getElementById('hipsError');
    let thighsError = document.getElementById('thighsError');
    let armsError = document.getElementById('armsError');

    function checkHeight(){
        let value = parseFloat(document.getElementById('height').value);
        let heightError = document.getElementById('heightError');
        if(isNaN(value) || value < 2 || value > 10){
            heightError.innerHTML = "please enter value between 2-10 feet!"
            heightError.style.color = 'red';   
            return false;  
        }
        else{
            heightError.innerHTML = "";
            return true;
        }
    }

    function checkWeight(){
        let value = parseFloat(document.getElementById('weight').value);
        let weightError = document.getElementById('weightError');
        if(isNaN(value) || value < 20 || value > 100){
            weightError.innerHTML = "please enter value between 20-100 kg!"
            weightError.style.color = 'red'; 
             return false;         
        }
        else{
            weightError.innerHTML = "";
             return true;     
        }
    }
    function checkWaist(){
        let value = parseFloat(document.getElementById('waist').value);
        let waistError = document.getElementById('waistError');
        if(isNaN(value) || value < 20 || value > 100){
            waistError.innerHTML = "please enter value between 20-100 cm!"
            waistError.style.color = 'red'; 
             return false;         
        }
        else{
            waistError.innerHTML = "";
             return true;     
        }
    }

    function checkChest(){
        let value = parseFloat(document.getElementById('chest').value);
        let chestError = document.getElementById('chestError');
        if(isNaN(value) || value < 20 || value > 100){
            chestError.innerHTML = "please enter value between 20-100 cm!"
            chestError.style.color = 'red'; 
             return false;     
                
        }
        else{
            chestError.innerHTML = "";
             return true;     
        }
    }

    function checkHips(){
        let value = parseFloat(document.getElementById('hips').value);
        let hipsError = document.getElementById('hipsError');
        if(isNaN(value) || value < 20 || value > 100){
            hipsError.innerHTML = "please enter value between 20-100 cm!"
            hipsError.style.color = 'red'; 
             return false;         
        }
        else{
            hipsError.innerHTML = "";
             return true;     
        }
    }
    
    function checkThighs(){
        let value = parseFloat(document.getElementById('thighs').value);
        let thighsError = document.getElementById('thighsError');
        if(isNaN(value) || value < 20 || value > 100){
            thighsError.innerHTML = "please enter value between 20-100 cm!"
            thighsError.style.color = 'red';  
             return false;        
        }
        else{
            thighsError.innerHTML = "";
             return true;     
        }
    }
    function checkArms(){
        let value = parseFloat(document.getElementById('arms').value);
        let armsError = document.getElementById('armsError');
        if(isNaN(value) || value < 20 || value > 100){
            armsError.innerHTML = "please enter value between 20-100 cm!"
            armsError.style.color = 'red';
            return false;     
        }
        else{
            armsError.innerHTML = "";
             return true;     
        }
    }


    function validateForm(){
        let isValid = checkHeight() && checkWeight() && checkWaist() &&
              checkChest() && checkHips() && checkThighs() && checkArms();


        let successMsg = document.getElementById('success');

            if (isValid) {
                successMsg.innerHTML = "Measurements successfully saved!";
                successMsg.style.color = "green"; 
                return true;
            } else {
                successMsg.innerHTML = "";
                return false;
            }
    }