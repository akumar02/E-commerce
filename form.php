
.form{
    max-width: 500px;
    padding: 30px 20px; 
    background: #f4f7f8;
    margin: 50px auto;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form fieldset{
    border: none;
}
.form legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form label {
    display: block;
    margin-bottom: 8px;
}
.form input[type="text"],
.form input[type="email"],
.form textarea,
.form select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
   
}
.form input[type="text"]:focus,
.form input[type="email"]:focus,
.form textarea:focus,
.form select:focus{
    background: #d2d9dd;
}
.form select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form [type="submit"],
.form [type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form[type="submit"]:hover,
.form[type="button"]:hover
{
    background: #109177;
}
