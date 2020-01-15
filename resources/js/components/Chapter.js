import { Button } from "reactstrap";
import React from "react";
import ReactDOM from "react-dom";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faTrophy, faQuestionCircle } from "@fortawesome/free-solid-svg-icons";

import "../css/bootstrap.min.css";
import "../css/my_custom_css.css";
import "../css/my_custom.css";

const Chapter = props => {
    const data = JSON.parse(props.data);
    console.log("data from component", data);
    return (
        <div>
            <div className="container">
                <div className="column" style={{ justifyContent: "center" }}>
                    {data.map(item => {
                        return (
                            <div className="card">
                                <div className="card-body">
                                    <h3 className="card-title">{item.name}</h3>
                                    <div className="float-right">
                                        <FontAwesomeIcon icon={faTrophy} /> 1
                                        <br></br>
                                        <FontAwesomeIcon
                                            icon={faQuestionCircle}
                                        />{" "}
                                        50
                                    </div>

                                    <Button
                                        style={{
                                            backgroundColor: "#383838",
                                            marginTop: "2rem"
                                        }}
                                    >
                                        Start Test
                                    </Button>
                                </div>
                            </div>
                        );
                    })}
                </div>
            </div>
        </div>
    );
};

export default Chapter;

if (document.getElementById("chapter")) {
    var mydata = document.getElementById("chapter").getAttribute("data");
    ReactDOM.render(
        <Chapter data={mydata} />,
        document.getElementById("chapter")
    );
}
