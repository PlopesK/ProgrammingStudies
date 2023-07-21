import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';

function Button() {
  return <button><a href = "index.html">Click me</a></button>;
}
function Hello() {
  return (
    <div> 
      <h1>Hello World!</h1>
      <Button />
    </div>
  )
}


const container = document.getElementById('root');
const root = ReactDOM.createRoot(container);
root.render(<Hello />);