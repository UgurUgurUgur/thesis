@extends ('layouts\app');
<link rel="stylesheet" href="css\profile">
<div class="container"> 
    <div class="card"> 
        <div class="info"> 
            <span>Edit form</span> 
            <button id="savebutton">edit</button> 
        </div> 
        <div class="forms"> 
            <div class="inputs"> 
                <span>First Name</span> 
                <input type="text" readonly value="John"> 
            </div> <div class="inputs"> 
                <span>Last Name</span> 
                <input type="text" readonly value="Doe"> 
            </div> <div class="inputs"> 
                <span>Email</span> 
                <input type="text" readonly value="john.doe12@gmail.com"> 
            </div> <div class="inputs"> 
                <span>UserName</span> 
                <input type="text" readonly value="johndoe12"> 
            
        </div> 
    </div>
</div>