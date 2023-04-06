import * as React from "react";
import Avatar from "@mui/material/Avatar";
import Button from "@mui/material/Button";
import CssBaseline from "@mui/material/CssBaseline";
import TextField from "@mui/material/TextField";
import FormControlLabel from "@mui/material/FormControlLabel";
import Checkbox from "@mui/material/Checkbox";
import Grid from "@mui/material/Grid";
import Box from "@mui/material/Box";
import LockOutlinedIcon from "@mui/icons-material/LockOutlined";
import Typography from "@mui/material/Typography";
import Container from "@mui/material/Container";

import { Link } from "react-router-dom";
import {useEffect, useState} from "react"
export default function SignIn() {

  const url="http://gabixfilms.mmicastres.fr/public/api/user"

  const [user, setUser] = useState({});
  function verif(data){
    console.log(data)
    let myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    const fetchOptions = {
      
      method: "POST", // --> POST  = AJOUT
      body: JSON.stringify({mail : 'gabindx1@gmail.com', mdp : 'suuu'})
    }
    fetch(url ,fetchOptions)
      .then((response) => {
        return response.json();
      })
      .then((dataJSON) => {
        console.log(dataJSON);
       //setUser(dataJSON);
      })
      .catch((error) => {
        console.log(error);
      });
    }

  const handleSubmit = (event) => {
    event.preventDefault();
    const data = new FormData(event.currentTarget);
    // console.log({
    //   mail: data.get("mail"),
    //   mdp: data.get("mdp")
    // });
    verif({mail: data.get("mail"),
    mdp: data.get("mdp")});
  };

  return (
    <Container component="main" maxWidth="xs">
      <Box
        sx={{
          marginTop: 8,
          display: "flex",
          flexDirection: "column",
          alignItems: "center"
        }}
      >
        <Avatar sx={{ m: 1, bgcolor: "secondary.main" }}>
          <LockOutlinedIcon />
        </Avatar>
        <Typography component="h1" variant="h5">
          Connectez-vous
        </Typography>
        <Box component="form" onSubmit={handleSubmit} noValidate sx={{ mt: 1 }}>
          <TextField
            margin="normal"
            required
            fullWidth
            id="mail"
            label="Mail"
            name="mail"
            autoComplete="email"
            autoFocus
          />
          <TextField
            margin="normal"
            required
            fullWidth
            name="mdp"
            label="Mot de passe"
            type="password"
            id="mdp"
          />
         
          <Button
            type="submit"
            fullWidth
            variant="contained"
            sx={{ mt: 3, mb: 2 }}
          >
            Connexion
          </Button>
          <Grid container justifyContent="center">
            <Grid item>
              <Link to="/ident">{"Pas de compte ? Créer un compte"}</Link>
            </Grid>
          </Grid>
        </Box>
      </Box>
    </Container>
  );
}
