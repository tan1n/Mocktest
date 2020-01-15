import React from "react";
import ReactDOM from "react-dom";
// nodejs library that concatenates strings
import classnames from "classnames";
// reactstrap components
import {
    Collapse,
    NavbarBrand,
    Navbar,
    NavItem,
    NavLink,
    Nav,
    Container
} from "reactstrap";

import "../css/bootstrap.min.css";
import "../css/my_custom_css.css";
import "../css/my_custom.css";

function MyNavbar() {
    const [navbarColor, setNavbarColor] = React.useState("navbar");
    const [navbarCollapse, setNavbarCollapse] = React.useState(false);

    const toggleNavbarCollapse = () => {
        setNavbarCollapse(!navbarCollapse);
        document.documentElement.classList.toggle("nav-open");
    };

    React.useEffect(() => {
        const updateNavbarColor = () => {
            if (
                document.documentElement.scrollTop > 299 ||
                document.body.scrollTop > 299
            ) {
                setNavbarColor("");
            } else if (
                document.documentElement.scrollTop < 300 ||
                document.body.scrollTop < 300
            ) {
                setNavbarColor("navbar");
            }
        };

        window.addEventListener("scroll", updateNavbarColor);

        return function cleanup() {
            window.removeEventListener("scroll", updateNavbarColor);
        };
    });
    return (
        <Navbar className={classnames("fixed-top", navbarColor)} expand="lg">
            <Container>
                <div className="navbar-translate">
                    <NavbarBrand
                        data-placement="bottom"
                        href="#"
                        target="_blank"
                        title=""
                    >
                        Navbar
                    </NavbarBrand>
                    <button
                        aria-expanded={navbarCollapse}
                        className={classnames("navbar-toggler navbar-toggler", {
                            toggled: navbarCollapse
                        })}
                        onClick={toggleNavbarCollapse}
                    >
                        <span className="navbar-toggler-bar bar1" />
                        <span className="navbar-toggler-bar bar2" />
                        <span className="navbar-toggler-bar bar3" />
                    </button>
                </div>
                <Collapse
                    className="justify-content-end"
                    navbar
                    isOpen={navbarCollapse}
                >
                    <Nav navbar>
                        <NavItem>
                            <NavLink
                                data-placement="bottom"
                                href="#"
                                target="_blank"
                                title="Follow us on Twitter"
                            >
                                <i className="fa fa-twitter" />
                                <p className="d-lg-none">Twitter</p>
                            </NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink
                                data-placement="bottom"
                                href="#"
                                target="_blank"
                                title="Like us on Facebook"
                            >
                                <i className="fa fa-facebook-square" />
                                <p className="d-lg-none">Facebook</p>
                            </NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink
                                data-placement="bottom"
                                href="#"
                                target="_blank"
                                title="Follow us on Instagram"
                            >
                                <i className="fa fa-instagram" />
                                <p className="d-lg-none">Instagram</p>
                            </NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink
                                data-placement="bottom"
                                href="#"
                                target="_blank"
                                title="Star on GitHub"
                            >
                                <i className="fa fa-github" />
                                <p className="d-lg-none">GitHub</p>
                            </NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink href="#" target="_blank">
                                <i className="nc-icon nc-book-bookmark" />
                            </NavLink>
                        </NavItem>
                        {/* <NavItem>
              <Button
                className="btn-round"
                color="danger"
                href="#pablo"
                target="_blank"
                disabled
              ></Button>
            </NavItem> */}
                    </Nav>
                </Collapse>
            </Container>
        </Navbar>
    );
}

export default MyNavbar;

if (document.getElementById("mynavbar")) {
    ReactDOM.render(<MyNavbar />, document.getElementById("mynavbar"));
}
