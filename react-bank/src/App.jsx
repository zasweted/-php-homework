import { useState, useEffect } from 'react';
import axios from 'axios';
import './App.scss';
import Create from './Components/Create';
import List from './Components/List';
import Login from './Components/Login';
import Nav from './Components/Nav';
import Prideti from './Components/Prideti';
import Atimti from './Components/Atimti';
import Error from './Components/Error';

function App() {

  const [users, setUsers] = useState(null);
  const [createData, setCreateData] = useState(null);
  const [deleteData, setDeleteData] = useState(null);
  const [editData, setEditData] = useState(null);
  const [modalDataAdd, setModalDataAdd] = useState(null);
  const [modalDataRemove, setModalDataRemove] = useState(null);
  const [lastUpdate, setLastUpdate] = useState(Date.now());
  const [error, setError] = useState({vardas: '', pavarde: '', asmensKodas: '', noError: '', delete: ''});
  console.log(error);

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
      showError(res.data.error);
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

const showError = error => {
  setError(error);
  // setTimeout(() => setError(null), 3000)
}


  return (
    <>
      <Nav></Nav>
      <div className="container">
        <div className="row">
          <div className="col-5">
            <Login></Login>
            <Create setCreateData={setCreateData} error={error}></Create>
          </div>
          <div className="col-5">
            <List users={users} setDeleteData={setDeleteData} setModalDataAdd={setModalDataAdd} setModalDataRemove={setModalDataRemove} error={error}></List>
          </div>
        </div>
      </div>
      <Prideti setModalData={setModalDataAdd} modalData={modalDataAdd} setEditData={setEditData}></Prideti>
      <Atimti setModalData={setModalDataRemove} modalData={modalDataRemove} setEditData={setEditData}></Atimti>
      {/* <Error error={error}></Error> */}
    </>
  );
}

export default App;
