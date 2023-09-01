import React, { useState } from "react";
import ReactDOM from "react-dom";

class Counter extends React.Component {
  state = {
    value: 0,
  };

  handleIncrement = () => {
    this.setState((state) => ({
      value: state.value + 1,
    }));
    ("");
  };

  handleDecrement = () => {
    this.setState((state) => ({
      value: state.value - 1,
    }));
  };

  render() {
    return (
      <div>
        <h2>{this.state.value}</h2>
        <button onClick={this.handleDecrement}>Decrement</button>
        <button onClick={this.handleIncrement}>Increment</button>
      </div>
    );
  }
}

function FormExample() {
  const [inputValue, setInputValue] = useState("");
  const [displayedValue, setDisplayedValue] = useState("");

  const handleInputChange = (event) => {
    setInputValue(event.target.value);
  };

  const handleDisplayClick = () => {
    setDisplayedValue(inputValue);
  };

  return (
    <div>
      <input type="text" value={inputValue} onChange={handleInputChange} />
      <button onClick={handleDisplayClick}>Display</button>
      <p>Displayed Value: {displayedValue}</p>
    </div>
  );
}

const rootElement = document.getElementById("root");
ReactDOM.render(
  <div>
    <Counter /> <br></br>
    <FormExample />
  </div>,
  rootElement
);
