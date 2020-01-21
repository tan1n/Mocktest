import { Card, CardBody, CardTitle, CardImg } from "reactstrap";
import React from "react";
import ReactDOM from "react-dom";

const Grid = props => {
    const data = JSON.parse(props.data);
    console.log("data from component", JSON.parse(props.data));
    return (
        <div>
            <div className="container" style={{ marginTop: "100px" }}>
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
                                        width: "20rem",
                                        height: "25rem" //if needed fixed height just add height example
                                        // ,height: "17rem"
                                    }}
                                >
                                    <CardBody>
                                        <CardImg
                                            top
                                            src={item.image}
                                            alt="..."
                                            style={{
                                                width: "18rem",
                                                height: "20rem"
                                            }}
                                        />
                                        <CardTitle
                                            style={{
                                                fontWeight: "bolder",
                                                fontSize: "22px",
                                                textAlign: "center"
                                            }}
                                        >
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
