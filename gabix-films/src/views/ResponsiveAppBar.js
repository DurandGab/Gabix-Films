import * as React from "react";
import AppBar from "@mui/material/AppBar";
import Box from "@mui/material/Box";
import Toolbar from "@mui/material/Toolbar";
import IconButton from "@mui/material/IconButton";
import Typography from "@mui/material/Typography";
import Menu from "@mui/material/Menu";
import MenuIcon from "@mui/icons-material/Menu";
import Container from "@mui/material/Container";
import Avatar from "@mui/material/Avatar";
import Button from "@mui/material/Button";
import Tooltip from "@mui/material/Tooltip";
import MenuItem from "@mui/material/MenuItem";
import AdbIcon from "@mui/icons-material/Adb";

import { Link } from "react-router-dom";

function ResponsiveAppBar() {
  // === gestion menu de gauche (burger ou liste suivant la taille)
  const [anchorElNav, setAnchorElNav] = React.useState(null);
  // -- afficher le menu à la position de la cible de l'event
  const handleOpenNavMenu = (event) => {
    setAnchorElNav(event.currentTarget);
  };
  // -- fermer le menu -> la position est nulle
  const handleCloseNavMenu = () => {
    setAnchorElNav(null);
  };
  // === gestion menu de droite (profil user)
  const [anchorElUser, setAnchorElUser] = React.useState(null);
  const handleOpenUserMenu = (event) => {
    setAnchorElUser(event.currentTarget);
  };
  const handleCloseUserMenu = () => {
    setAnchorElUser(null);
  };

  return (
    <AppBar position="fixed">
      <Container maxWidth="xl">
        <Toolbar disableGutters>
          {/* ==========  icone android à gauche 
                  s'affiche uniquement si taille écran = md */}
          <AdbIcon sx={{ display: { xs: "none", md: "flex" }, mr: 1 }} />
          {/* ==========  libellé à gauche qui
                  s'affiche uniquement si taille écran = md */}
          <Link to={"/films"}>
            <Typography
              variant="h6"
              noWrap
              sx={{
                mr: 2,
                display: { xs: "none", md: "flex" },
                fontFamily: "monospace",
                fontWeight: 700,
                letterSpacing: ".3rem",
                color: "inherit",
                textDecoration: "none"
              }}
            >
              Gabix-Films
            </Typography>
          </Link>
          {/* menu burger qui s'affiche uniquement si taille écran = md */}
          <Box sx={{ flexGrow: 1, display: { xs: "flex", md: "none" } }}>
            {/* icon burger */}
            <IconButton
              size="large"
              aria-label="account of current user"
              aria-controls="menu-appbar"
              aria-haspopup="true"
              onClick={handleOpenNavMenu} // ouvre/ferme le menu
              color="inherit"
            >
              <MenuIcon />
            </IconButton>
            {/* le menu en popup si taille écran < md */}
            <Menu
              id="menu-appbar"
              anchorEl={anchorElNav} // position du menu
              anchorOrigin={{
                vertical: "bottom",
                horizontal: "left"
              }}
              keepMounted
              transformOrigin={{
                vertical: "top",
                horizontal: "left"
              }}
              open={Boolean(anchorElNav)} // affiché / caché en fonction du state
              onClose={handleCloseNavMenu} // fonction exécutée quand on ferme le menu
              sx={{
                display: { xs: "block", md: "none" }
              }}
            >
              <MenuItem onClick={handleCloseNavMenu}>
                <Link to={"/films"}>
                  <Typography textAlign="center">Accueil</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseNavMenu}>
                <Link to={"/favoris"}>
                  <Typography textAlign="center">Favoris</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseNavMenu}>
                <Link to={"/ajoutfilm"}>
                  <Typography textAlign="center">Ajouter</Typography>
                </Link>
              </MenuItem>
            </Menu>
          </Box>
          {/* ==========  icone android à gauche 
                  s'affiche uniquement si taille écran < md */}
          <AdbIcon sx={{ display: { xs: "flex", md: "none" }, mr: 1 }} />
          <Typography
            variant="h5"
            noWrap
            component="a"
            href="/films"
            sx={{
              mr: 2,
              display: { xs: "flex", md: "none" },
              flexGrow: 1,
              fontFamily: "monospace",
              fontWeight: 700,
              letterSpacing: ".3rem",
              color: "inherit",
              textDecoration: "none"
            }}
          >
            Gabix-Films
          </Typography>
          {/* ==========  menu de gauche mais affiché dans la navbar
             si la taille de l'écran est assez grande = md */}
          <Box sx={{ flexGrow: 1, display: { xs: "none", md: "flex" } }}>
            <Link to={"/films"}>
              <Button
                onClick={handleCloseNavMenu}
                sx={{ my: 2, color: "white", display: "block" }}
              >
                Accueil
              </Button>
            </Link>
            <Link to={"/favoris"}>
              <Button
                onClick={handleCloseNavMenu}
                sx={{ my: 2, color: "white", display: "block" }}
              >
               Favoris
              </Button>
            </Link>
            <Link to={"/ajoutfilm"}>
              <Button
                onClick={handleCloseNavMenu}
                sx={{ my: 2, color: "white", display: "block" }}
              >
                ajouter
              </Button>
            </Link>
          </Box>
          {/* ==========  menu profil user à droite 
                  toujours identique quelle que soit la taille de l'écran
          */}
          <Box sx={{ flexGrow: 0 }}>
            {/*  -------  icone du user avec tooltip */}
            <Tooltip title="Open settings">
              {/* icone pour ouvrir le menu */}
              <IconButton onClick={handleOpenUserMenu} sx={{ p: 0 }}>
                <Avatar alt="Remy Sharp" src="/static/images/avatar/2.jpg" />
              </IconButton>
            </Tooltip>
            {/* le menu avec ses options */}
            <Menu
              sx={{ mt: "45px" }}
              id="menu-appbar"
              anchorEl={anchorElUser}
              anchorOrigin={{
                vertical: "top",
                horizontal: "right"
              }}
              keepMounted
              transformOrigin={{
                vertical: "top",
                horizontal: "right"
              }}
              open={Boolean(anchorElUser)} // position du menu
              onClose={handleCloseUserMenu} // action si fermeture du menu
            >
              <MenuItem onClick={handleCloseUserMenu}>
                <Link to={"/login"}>
                  <Typography textAlign="center">Login</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseUserMenu}>
                <Link to={"/ident"}>
                  <Typography textAlign="center">Ident</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseUserMenu}>
                <Link to={"/profil"}>
                  <Typography textAlign="center">Profile</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseUserMenu}>
                <Link to={"/account"}>
                  <Typography textAlign="center">Account</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseUserMenu}>
                <Link to={"/dashboard"}>
                  <Typography textAlign="center">Dashboard</Typography>
                </Link>
              </MenuItem>
              <MenuItem onClick={handleCloseUserMenu}>
                <Link to={"/logout"}>
                  <Typography textAlign="center">Logout</Typography>
                </Link>
              </MenuItem>
            </Menu>
          </Box>
        </Toolbar>
      </Container>
    </AppBar>
  );
}
export default ResponsiveAppBar;
