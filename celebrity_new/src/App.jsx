import { useEffect, useState } from "react";
import "./App.css";
import Chart from "./Chart.jsx";

function App() {
  const [data, setData] = useState([]);
  const [loaded, setLoaded] = useState(false);

  const getData = async () => {
    try {
      const response = await fetch(
        "http://www.cbp-exercises.test/celebrity/API/"
      );
      const data = await response.json();
      setData(data);
      setLoaded(true);
    } catch (error) {
      console.error("Error fetching data:", error);
    }
  };

  useEffect(() => {
    getData();
  }, []);

  return (
    <>
      <h1>TOP 10 MOST WEALTHY CELEBRITIES IN 2009</h1>
      {!loaded
        ? "Loading..."
        : data.length > 0 &&
          data.map((celebrity, index) => (
            <Chart
              key={index + "celeb"}
              name={celebrity.name}
              image={celebrity.image}
              wealth={Intl.NumberFormat().format(celebrity.wealth)}
              bio={celebrity.bio}
              age={celebrity.age}
              source_of_wealth={celebrity.source_of_wealth}
              marital_status={celebrity.marital_status}
              children={celebrity.children}
              profession={celebrity.profession}
            />
          ))}
    </>
  );
}

export default App;
