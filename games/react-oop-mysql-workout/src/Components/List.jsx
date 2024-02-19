import { useState, useEffect } from "react";
import { Game } from "../Game/Game";

export const List = (props) => {
  const [loading, setLoading] = useState(true);
  const [data, setData] = useState([]);
  const baseURL = "http://www.cbp-exercises.test/games/index.php";
  let query = `?sortby=${props.sortBy}&sortway=${props.sortWay}`;
  if (!props.sortBy || !props.sortWay) {
    query = "";
  }

  const loadData = () => {
    fetch(baseURL + query)
      .then((response) => response.json())
      .then((data) => {
        setData(data);
        setLoading(false);
      });
  };

  useEffect(() => {
    loadData();
  }, [props.sortBy, props.sortWay]);

  return (
    <div className="games">
      {loading ? (
        <div className="message">Loading...</div>
      ) : (
        <>
          <h1>List of games</h1>
          {data.map((item) => (
            <Game key={item.name} {...item} />
          ))}
        </>
      )}
    </div>
  );
};
