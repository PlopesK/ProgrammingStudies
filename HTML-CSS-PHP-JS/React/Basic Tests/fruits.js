import PropTypes from "prop-types";

const TypesOfFruit = () => {
  return (
    <div>
      <h2>Fruits:</h2>
      <ul>
        <li>Apples</li>
        <li>Blueberries</li>
        <li>Strawberries</li>
        <li>Bananas</li>
      </ul>
    </div>
  );
};

const Fruits = () => {
  return (
    <div>
      <TypesOfFruit />
    </div>
  );
};

const Vegetables = () => {
  return (
    <div>
      <h2>Vegetables: </h2>
      <ul>
        <li>Brussel Sprouts</li>
        <li>Broccoli</li>
        <li>Squash</li>
      </ul>
    </div>
  );
};

const ShoppingCart = (props) => {
  return (
    <div>
      <h1>Shopping Cart Component</h1>
      <p>Quantity: {props.items}</p>
    </div>
  );
};

ShoppingCart.propTypes = {
  items: PropTypes.number.isRequired,
};
ShoppingCart.defaultProps = { items: 0 };

class TypesOfFood extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
    return (
      <div>
        <h1>Types of Food:</h1>
        <Fruits />
        <Vegetables />
        <br />
        <ShoppingCart />
      </div>
    );
  }
}

const rootElement = document.getElementById("root");
ReactDOM.render(<TypesOfFood />, rootElement);
