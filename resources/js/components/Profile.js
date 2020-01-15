import React from "react";
import { Card, Container, Row, Col } from "reactstrap";
import CalendarHeatmap from "react-calendar-heatmap";
import "react-calendar-heatmap/dist/styles.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faGraduationCap } from "@fortawesome/free-solid-svg-icons";

import "../css/bootstrap.min.css";
import "../css/my_custom_css.css";
import "../css/my_custom.css";

const Profile = () => {
  return (
    <div class="container">
      <div class="row">
        <div
          class="col"
          style={{
            paddingTop: "100px"
          }}
        >
          <div className="owner">
            <div className="avatar">
              <img
                alt="..."
                className="img-circle img-no-padding img-responsive"
                src="https://img.freepik.com/free-vector/businessman-profile-cartoon_18591-58479.jpg?size=338&ext=jpg"
              />
            </div>
            <div className="name">
              <h2 className="title">
                Erik Lucano <br />
              </h2>
              <h4 className="description">About</h4>
            </div>
          </div>
          {/* <div className="avatar">
            <img
              alt="..."
              className="img-circle img-no-padding img-responsive"
              src={require("../erik-lucatero-2.jpg")}
            />
          </div> */}
        </div>
        <div
          class="col-sm"
          style={{
            paddingTop: "100px"
          }}
        >
          <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">
                  <FontAwesomeIcon icon={faGraduationCap} />
                  Education
                </h2>
                <div class="float-left">
                  <h5>International Islamic University Chittagong</h5>
                  <h5>South Asian College</h5>
                  <h5>Nasirabad Goverment Boys High School</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="container">
          <Container>
            <Row>
              <Col className="ml-auto mr-auto" lg="4">
                <Card className="card-register ml-auto mr-auto">
                  <h3 className="title text-center">
                    Total Number Of Test's Taken
                  </h3>
                  <h4 className="title text-center">Lower</h4>
                  <img
                    alt="..."
                    className="img-no-padding img-responsive"
                    src="https://image.flaticon.com/icons/svg/1039/1039328.svg"
                  />
                </Card>
              </Col>
              <Col className="ml-auto mr-auto" lg="4">
                <Card className="card-register ml-auto mr-auto">
                  <h3 className="title text-center">Highest Mark Obtained</h3>
                  <h4 className="title text-center">Lower</h4>
                  <img
                    alt="..."
                    className="img-no-padding img-responsive"
                    src=" https://image.flaticon.com/icons/svg/1837/1837917.svg"
                  />
                </Card>
              </Col>
              <Col className="ml-auto mr-auto" lg="4">
                <Card className="card-register ml-auto mr-auto">
                  <h3 className="title text-center">Best Mark Obtained In</h3>
                  <h4 className="title text-center">Lower</h4>
                  <img
                    alt="..."
                    className="img-no-padding img-responsive"
                    src="https://image.flaticon.com/icons/svg/1306/1306311.svg"
                  />
                </Card>
              </Col>
            </Row>
          </Container>
          <div class="card" style={{ padding: "50px" }}>
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
              // onClick={e => alert("2020-01-03")}
            />
          </div>
        </div>
      </div>
    </div>
  );
};

export default Profile;

if (document.getElementById('profile')) {
  ReactDOM.render(<Profile />, document.getElementById('profile'));
}
