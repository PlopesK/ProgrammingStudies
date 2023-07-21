import './App.css';
import React, { useState, useEffect } from 'react';

function App() {
  const [isDark, setIsDark] = useState(false);

  const toggleDarkMode = () => {
    setIsDark(!isDark);
  };

  useEffect(() => {
      const theme = isDark ? 'dark' : 'light';
      localStorage.setItem('theme', theme);

      document.documentElement.style.setProperty( '--SiteColor', isDark ? '#3B2110' : '#FAFAFA');
      document.documentElement.style.setProperty( '--Font', isDark ? '#E6AA83' : '#61361A');
      document.documentElement.style.setProperty( '--Line', isDark ? '#ED8540' : '#8B4F26');
    }, 
    [isDark]
  ); 

  useEffect(() => {
    const storedTheme = localStorage.getItem('theme');
    setIsDark(storedTheme === 'dark');
  }, []);

  return (
    <div className="App">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
      <div className="body">
        <hr style={{'margin-bottom': 0}} />
        <h1> Registration for Internship </h1>
        <a className="lamp" id="lamp" onClick={toggleDarkMode}> <p><i class="fa fa-lightbulb "></i></p> </a>
        <hr style={{'margin-bottom': 10 + 'px'}}/>
        <img src= "Kitten Coffee Logo2.png" alt= "Kitten Coffee Logo" id="Kitten" width= "150" height= "150" />
        <form action= "#" method= "Post">
          <fieldset>
            <legend>User Information</legend>
            
            <div className="option">Name	<input type="Text" size="30" maxlength="40" placeholder="Enter your Name" /></div> 
                
            <div className="option">CPF	<input type="cpf" size="30" maxlength="11" placeholder="Enter your CPF" /></div>
                
            <div className="option">E-mail 	<input type="email" size="30" maxlength="40" placeholder="Enter your best E-mail" /></div> 
                
            <div className="option">Password 	<input type="password" size="30" maxlength="30" placeholder="Enter your password" /></div> 
                
            <div className="option">Phone Number <input type="tel" id="phone" size="30" 
            placeholder="+1 (67)12345-6789"	pattern="[0-9]{2}-[0-9]{2}-[0-9]{5} - [0-9]{4}" /></div>

            <div className="gender"> Gender	
              <div className='radio'> 
                <div className='option'> <input type= "Radio" name= "Gender" value= "Male" /> Male </div>
                <div className='option'> <input type= "Radio" name= "Gender" value= "Female" />Female</div>
                <div className='option'> <input type= "Radio" name= "Gender" value= "No_Answer" />I don't wish to answer </div>
              </div>
            </div>
                
            <div className="option">Birthdate <input type="date" /></div>
          </fieldset>
          <div className='selection'>
            <div className='table'>
              <h2>You also can</h2>
              <div className="change">
                <div className="pages"><a href = ""> Go to the Next Page </a></div>
              </div>
            </div>
          </div>
          <div className="btn">
            <hr />
            <input type= "Submit" value= "New" />
            <input type= "Submit" value= "Refresh" />
            <input type= "Reset" value= "Delete" />
            <hr />
          </div>
        </form>
      </div>
    </div>
  );
}

export default App;
