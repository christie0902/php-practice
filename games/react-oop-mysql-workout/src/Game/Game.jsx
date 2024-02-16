import React from "react";

export const Game = (props) => {
  return (
    <div className="game">
      <h3>{props.name}</h3>
      <img src={props.image_url} alt="image" />
      <p>Rating: {props.rating}</p>
    </div>
  );
};
