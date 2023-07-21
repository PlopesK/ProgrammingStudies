import React from 'react';
import ReactDOM from 'react-dom';

class Counter extends React.Component {
  state = {
    value: 0
  };

  handleIncrement = () => {
    this.setState((state) => ({
      value: state.value + 1
    }));
  };

  handleDecrement = () => {
    this.setState((state) => ({
      value: state.value - 1
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

const rootElement = document.getElementById('root');
ReactDOM.render(<Counter />, rootElement);