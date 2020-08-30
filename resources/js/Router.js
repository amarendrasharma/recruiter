import React from 'react';
import {BrowserRouter, Link, Route, Switch} from 'react-router-dom';
import Home from './components/Home/Home';
// import Login from './views/Login/Login';
// import Register from './views/Register/Register';
// import NotFound from './views/NotFound/NotFound'
// User is LoggedIn
// import PrivateRoute from './PrivateRoute'
// import Dashboard from './views/user/Dashboard/Dashboard';
const Main = props => (
<Switch>
  <Route exact path='/' component={Home}/>
</Switch>
);
export default Main;