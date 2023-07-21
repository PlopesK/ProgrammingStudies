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
      <hr />
      <h1> Registration for Internship </h1>
      <a className="lamp" id="lamp" onClick={toggleDarkMode}> <p><i class="fa fa-lightbulb "></i></p> </a>
      <hr />
      <img src= "Kitten Coffee Logo2.png" alt= "Kitten Coffee Logo" width= "150" height= "150" />
      <form action= "#" method= "Post">
        <fieldset>
          <legend>User Information</legend>
          
          Name:	<input type="Text" size="40" maxlength="40" placeholder="Digite seu nome" /> 
              
          CPF:	<input type="Text" size="20" maxlength="11" placeholder="Digite seu CPF" />
              
          E-mail: 	<input type="email" size="50" maxlength="50" placeholder="Digite seu email" /> 
              
          Password: 	<input type="password" size="15" maxlength="15" placeholder="Digite sua senha" /> 
              
          Phone Number: <input type="tel" id="phone"
          placeholder="+1 (67)12345-6789"	pattern="[0-9]{2}-[0-9]{2}-[0-9]{5} - [0-9]{4}" />

          Sexo:	<input type= "Radio" name= "Male" value= "M" /> Masculino 
              <input type= "Radio" name= "Female" value= "F" />Feminino 
              
          Data de Nascimento: <input type="date" />
        </fieldset>
        <table border= "5" width= "300" align= "Center" cellspacing= "2" cellpadding= "2" bordercolor= "#8B4F26">
          <h2>Vôcê também pode:</h2>
          <div className="change">
            <div className="title">Avançar à próxima parte</div>
            <div className="pages"><a href = "FormulárioTrabalho(2).html"> Avançar </a></div>
          </div>
        </table>
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
