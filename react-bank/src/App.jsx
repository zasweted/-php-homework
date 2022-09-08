import { useState, useEffect } from 'react';
import './App.scss';
import Login from './Components/Login';
import Nav from './Components/Nav';

function App() {

  const [users, setUsers] = useState(null);
  return (
    <>
      <Nav></Nav>
      <div class="container">
  <div class="row">
    <div class="col-5">
      <Login></Login>
    </div>
    <div class="col-7">
      One of three columns
    </div>
  </div>
</div>
    </>
  );
}

export default App;
