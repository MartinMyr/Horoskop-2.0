<?php
    include 'function/function.php';
    include 'include/header.php';
   
?>

    <div id = "disclaimer">
        <h1> Horoscope Gen 2.0</h1>
        <p>These terms and conditions govern your use of this website. By using this website, you accept these terms and conditions in full. 
            If you disagree with these terms and conditions or any part of these terms and conditions, don’t use this website.
            This website uses cookies. By using this website and agreeing to these terms and conditions, you consent to behaviosec.com’s use of cookies. Behaviosec.com 
            is owned and operated by Behaviometrics AB (“us”, “we”, “our”).
        </p>

        <form method = "get">
           <h4> I hereby agree to the Terms & Conditions
                <input id="checkBox" type="checkbox" name = "chkBox" value = true>   </br></br>
                <button type = "submit" action = "index.php">Accept</button>
           </h4> 
            

        </form>


    </div>






<?php
    include 'include/footer.php';
?>