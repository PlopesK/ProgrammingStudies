class MyComponent extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
    return (
      <div>
        <h1> Hello JSX!</h1>
        <p> Lorem ipusum i forgor the rest </p>
        <ul>
          {/* LIST HAHA i don know*/}
          Here a cool list
          <li> Pipipi popopo </li>
          <li> Hello everyone </li>
          <li> How are you? Fine thank you </li>
        </ul>
        <div className="myDiv">
          <h1>Add a class to this div</h1>
        </div>
        <div>
          <h2>Welcome to React!</h2> <br />
          <p>Be sure to close all tags!</p>
          <hr />
        </div>
      </div>
    );
  }
}
