import { Card, CardBody, CardTitle, CardImg } from "reactstrap";
import React from "react";
import ReactDOM from "react-dom";

import "../css/bootstrap.min.css";
import "../css/my_custom_css.css";
import "../css/my_custom.css";

const Grid = props => {
    const data = JSON.parse(props.data);
    console.log("data from component", JSON.parse(props.data));
    return (
        <div>
            <div className="container" style={{ paddingTop: "100px" }}>
                <div className="row" style={{ justifyContent: "center" }}>
                    {data.map(item => {
                        return (
                            <div
                                style={{
                                    paddingLeft: "5px",
                                    paddingRight: "5px"
                                }}
                            >
                                <Card
                                    style={{
                                        width: "12rem" //if needed fixed height just add height example
                                        // ,height: "17rem"
                                    }}
                                >
                                    <CardBody>
                                        <CardImg
                                            top
                                            src="https://image.flaticon.com/teams/slug/google.jpg"
                                            alt="..."
                                        />
                                        <CardTitle>
                                            <a href={`/subject/${item.id}`}>
                                                {item.name}
                                            </a>
                                        </CardTitle>
                                        {/* <CardSubtitle className="mb-2 text-muted">
                    Card subtitle
                  </CardSubtitle>
                  <CardText>
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </CardText>
                  <CardLink href="/#/">Card link</CardLink>
                  <CardLink href="/#/">Another link</CardLink> */}
                                    </CardBody>
                                </Card>
                            </div>
                        );
                    })}
                </div>
            </div>
        </div>
    );
};

export default Grid;

if (document.getElementById("grid")) {
    var mydata = document.getElementById("grid").getAttribute("data");
    ReactDOM.render(<Grid data={mydata} />, document.getElementById("grid"));
}
