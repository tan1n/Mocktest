import React from "react";

// reactstrap components
import {
  NavItem,
  NavLink,
  Nav,
  TabContent,
  TabPane,
  Container,
  Row,
  Col
} from "reactstrap";

import CalendarHeatmap from "react-calendar-heatmap";
import "react-calendar-heatmap/dist/styles.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faGraduationCap } from "@fortawesome/free-solid-svg-icons";

// core components

import ProfilePageHeader from "./ProfilePageHeader";

function ProfilePage() {
  const [activeTab, setActiveTab] = React.useState("1");

  const toggle = tab => {
    if (activeTab !== tab) {
      setActiveTab(tab);
    }
  };

  document.documentElement.classList.remove("nav-open");
  React.useEffect(() => {
    document.body.classList.add("landing-page");
    return function cleanup() {
      document.body.classList.remove("landing-page");
    };
  });
  return (
    <>
      <ProfilePageHeader />
      <div className="section profile-content">
        <Container>
          <div className="owner">
            <div className="avatar">
              <img
                alt="..."
                className="img-circle img-no-padding "
                src={require("./my.jpg")}
              />
            </div>
            <div className="name">
              <h4 className="title">
                Mohammad Sadman <br />
              </h4>
              <h6 className="description">SOFTWERE ENGINEER</h6>
            </div>
          </div>
          <Row>
            <Col className="ml-auto mr-auto text-center" md="6">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <br />
            </Col>
          </Row>
          <br />
          <div className="nav-tabs-navigation">
            <div className="nav-tabs-wrapper">
              <Nav role="tablist" tabs>
                <NavItem>
                  <NavLink
                    className={activeTab === "1" ? "active" : ""}
                    onClick={() => {
                      toggle("1");
                    }}
                  >
                    Information
                  </NavLink>
                </NavItem>
                <NavItem>
                  <NavLink
                    className={activeTab === "2" ? "active" : ""}
                    onClick={() => {
                      toggle("2");
                    }}
                  >
                    Stats
                  </NavLink>
                </NavItem>
              </Nav>
            </div>
          </div>
          {/* Tab panes */}
          <TabContent className="following" activeTab={activeTab}>
            <TabPane tabId="1" id="follows">
              <Row>
                <Col>
                  <ul className="list-unstyled follows">
                    <li>
                      <Row>
                        <Col className="ml-auto mr-auto" lg="2" md="4" xs="4">
                          <FontAwesomeIcon icon={faGraduationCap} size="3x" />
                        </Col>
                        <Col className="ml-auto mr-auto" lg="7" md="4" xs="4">
                          <h6>
                            Education <br />
                            <small>
                              International Islamic University Chittagong
                            </small>
                            <br />
                            <small>South Asian College</small>
                            <br />
                            <small>Nasirabad Goverment Boys High School</small>
                            <br />
                            {/* <small>Musical Producer</small> */}
                          </h6>
                        </Col>
                      </Row>
                    </li>
                    <hr />
                    <li>
                      <Row>
                        <Col className="mx-auto" lg="2" md="4" xs="4">
                          {/* <img
                            alt="..."
                            className="img-circle img-no-padding img-responsive"
                            src={require("assets/img/faces/ayo-ogunseinde-2.jpg")}
                          /> */}
                        </Col>
                        <Col className="ml-auto mr-auto" lg="7" md="4" xs="4">
                          <h6>
                            Experience <br />
                            <small>Null</small>
                          </h6>
                        </Col>
                      </Row>
                    </li>
                  </ul>
                </Col>
              </Row>
            </TabPane>
            <TabPane className="text-center" tabId="2" id="following">
              <Row>
                <Col>
                  <ul className="list-unstyled follows">
                    <li>
                      <Row>
                        <Col className="ml-auto mr-auto" lg="2" md="4" xs="4">
                          <img
                            alt="..."
                            className="img-circle img-no-padding img-responsive"
                            src="https://image.flaticon.com/icons/svg/1039/1039328.svg"
                          />
                        </Col>
                        <Col className="ml-auto mr-auto" lg="7" md="4" xs="4">
                          <h6>
                            Total Number Of Test's Taken <br />
                            <small>10</small>
                            <br />
                          </h6>
                        </Col>
                      </Row>
                    </li>
                    <hr />
                    <li>
                      <Row>
                        <Col className="mx-auto" lg="2" md="4" xs="4">
                          <img
                            alt="..."
                            className="img-no-padding img-responsive"
                            src=" https://image.flaticon.com/icons/svg/1837/1837917.svg"
                          />
                        </Col>
                        <Col className="ml-auto mr-auto" lg="7" md="4" xs="4">
                          <h6>
                            Highest Mark Obtained <br />
                            <small>30</small>
                            <br />
                          </h6>
                        </Col>
                      </Row>
                    </li>
                    <hr />
                    <li>
                      <Row>
                        <Col className="mx-auto" lg="2" md="4" xs="4">
                          <img
                            alt="..."
                            className="img-no-padding img-responsive"
                            src="https://image.flaticon.com/icons/svg/1306/1306311.svg"
                          />
                        </Col>
                        <Col className="ml-auto mr-auto" lg="7" md="4" xs="4">
                          <h6>
                            Best Mark Obtained In
                            <br />
                            <small>English 1st Paper</small>
                            <br />
                          </h6>
                        </Col>
                      </Row>
                      <hr />
                      <Row>
                        <Col className="mx-auto" md="4">
                          <h4>Test Taken Dates</h4>
                          <br />
                          <CalendarHeatmap
                            startDate={new Date("2020-01-01")}
                            endDate={new Date("2020-06-01")}
                            values={[
                              { date: "2020-01-03", count: 2 },
                              { date: "2020-05-22", count: 1 },
                              { date: "2020-02-30", count: 5 }
                            ]}
                            classForValue={value => {
                              if (!value) {
                                return "color-empty";
                              }
                              return `color-scale-${value.count}`;
                            }}
                            onClick={e => alert("2020-01-03")}
                          />
                        </Col>
                      </Row>
                    </li>
                  </ul>
                </Col>
              </Row>
            </TabPane>
          </TabContent>
        </Container>
      </div>
    </>
  );
}

export default ProfilePage;
