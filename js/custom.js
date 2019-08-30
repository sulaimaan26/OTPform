function validateform(){  
var number=document.myform.number.value;  
var otp=document.myform.otp.value;  
  
		if (number==null || number==""){  
		  alert("Please enter the mobile number!!!");  
		  return false;  
		}else if(number.length>10||number.length<10){  
		  alert("Please enter the valid mobile number!!!");  
		  return false;  
		}else if(otp==null || otp==""){
		  alert("Please enter the OTP!!!");  
		  return false;
		}else if(otp.length<=3 || otp.length>8){  
		  alert("Please enter the valid OTP!!!");  
		  return false;  
		}  
}  


  function moveCursor(fromTextBox, toTextBox,type) 
    {
        // Get the count of characters in fromTextBox
        var length = fromTextBox.value.length;
        // Get the value of maxLength attribute from the fromTextBox
        var maxlength = fromTextBox.getAttribute("maxlength");
        if((length == maxlength))
        {
            // If the number of charactes typed in the fromText is
            // equal to the maxLength attribute then set focus on
            // the next textbox
            document.getElementById(toTextBox).focus();
        }
    }


    function moveCursor2(fromTextBox, toTextBox,type) 
    {
        // Get the count of characters in fromTextBox
        var length = fromTextBox.value.length;
        // Get the value of maxLength attribute from the fromTextBox
        var maxlength = fromTextBox.getAttribute("maxlength");
        if((length == maxlength)){
        	document.getElementById(toTextBox).click();
        }
    }
