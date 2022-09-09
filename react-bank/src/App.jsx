import { useState, useEffect } from 'react';
import axios from 'axios';
import './App.scss';
import Create from './Components/Create';
import List from './Components/List';
import Login from './Components/Login';
import Nav from './Components/Nav';
import Edit from './Components/Edit';

function App() {

  const [users, setUsers] = useState(null);
  const [createData, setCreateData] = useState(null);
  const [deleteData, setDeleteData] = useState(null);
  const [editData, setEditData] = useState(null);
  const [modalData, setModalData] = useState(null);
  const [lastUpdate, setLastUpdate] = useState(Date.now());

  useEffect(() => {
    axios.get('http://bank.oop/react/list')
    .then(res => setUsers(res.data))
  }, [lastUpdate]);
  

  useEffect(() => {
    if(null === createData){
      return;
    }
    axios.post('http://bank.oop/react/list', createData)
    .then(res => {
      setLastUpdate(Date.now());
  })
}, [createData])

useEffect(() => {
  if(null === deleteData){
    return;
  }
  axios.delete('http://bank.oop/react/list/' + deleteData.id)
  .then(res => {
    setLastUpdate(Date.now());
  })
  
}, [deleteData])

useEffect(() => {
  if(null === editData){
    return;
  }
  axios.put('http://bank.oop/react/list/' + editData.id, editData)
  .then(res => {
    setLastUpdate(Date.now());
  })
}, [editData])


  return (
    <>
      <Nav></Nav>
      <div className="container">
        <div className="row">
          <div className="col-5">
            <Login></Login>
            <Create setCreateData={setCreateData}></Create>
          </div>
          <div className="col-5">
            <List users={users} setDeleteData={setDeleteData}></List>
          </div>
        </div>
      </div>
      <Edit setModalData={setModalData} modalData={modalData} setEditData={setEditData}></Edit>
    </>
  );
}

export default App;
