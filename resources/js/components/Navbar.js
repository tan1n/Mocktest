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
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser, faIdCard, faHome } from "@fortawesome/free-solid-svg-icons";

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
        <div style={{ marginBottom: "50px" }}>
            <Navbar
                className={classnames("fixed-top", navbarColor)}
                expand="lg"
            >
                <Container>
                    <div className="navbar-translate">
                        <NavbarBrand
                            data-placement="bottom"
                            href="#"
                            target="_blank"
                        >
                            <FontAwesomeIcon icon={faHome} />
                            Home
                        </NavbarBrand>
                        <button
                            aria-expanded={navbarCollapse}
                            className={classnames(
                                "navbar-toggler navbar-toggler",
                                {
                                    toggled: navbarCollapse
                                }
                            )}
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
                                >
                                    <FontAwesomeIcon icon={faUser} />
                                    Profile
                                </NavLink>
                            </NavItem>
                            <NavItem>
                                <NavLink
                                    data-placement="bottom"
                                    href="#"
                                    target="_blank"
                                >
                                    <FontAwesomeIcon icon={faIdCard} />
                                    Stats
                                </NavLink>
                            </NavItem>
                            <NavItem>
                                <NavLink
                                    data-placement="bottom"
                                    href="#"
                                    target="_blank"
                                >
                                    <FontAwesomeIcon icon={faUser} />
                                    Profile
                                </NavLink>
                            </NavItem>
                        </Nav>
                    </Collapse>
                </Container>
            </Navbar>
        </div>
    );
}

export default MyNavbar;

if (document.getElementById("mynavbar")) {
    ReactDOM.render(<MyNavbar />, document.getElementById("mynavbar"));
}
