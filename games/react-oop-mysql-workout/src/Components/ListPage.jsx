import { useState, useEffect } from "react";
import { List } from "./List.jsx";

const ListPage = () => {
  const [sortBy, setSortBy] = useState("");
  const [sortWay, setSortWay] = useState("");

  const handleSort = (e) => {
    //console.log(e.target.value);
    setSortBy(e.target.value.split("_")[0]);
    setSortWay(e.target.value.split("_")[1]);
  };

  return (
    <>
      {/* <select onChange={(e) => handleSort(e)} name="sort" id="sort">
        <option value={["name", "asc"]}>Sort name from A to Z</option>
        <option value={["name", "desc"]}>Sort name from Z to A</option>
      </select> */}
      <button value={"name_asc"} onClick={(e) => handleSort(event)}>
        Sort name from A to Z
      </button>
      <button value={"name_desc"} onClick={(e) => handleSort(event)}>
        Sort name from Z to A
      </button>
      <button value={"rating_asc"} onClick={(e) => handleSort(event)}>
        Sort rating from the lowest
      </button>
      <button value={"rating_desc"} onClick={(e) => handleSort(event)}>
        Sort rating from the highest
      </button>
      <List sortBy={sortBy} sortWay={sortWay} />
    </>
  );
};

export default ListPage;
