const Chart = (props) => {
  return (
    <>
      <div className="container">
        <img src={props.image} alt="image" />
        <h2>{props.name}</h2>
        <h3>Wealth: {props.wealth}</h3>
        <h3>Bio</h3>
        <p>{props.bio}</p>
        <p>Age: {props.age}</p>
        <p>Source of Wealth: {props.source_of_wealth}</p>
        <p>Marital Status: {props.marital_status}</p>
        <p>Children: {props.children}</p>
        <p>Profession: {props.profession}</p>
      </div>
    </>
  );
};

export default Chart;
