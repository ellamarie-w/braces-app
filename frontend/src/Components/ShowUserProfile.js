import React, {useEffect, useState} from 'react'
import axios from 'axios'
import {Link} from react-router-dom

const ShowUserProfile = () => {

    const endpoint = 'http://localhost:8000/backend'

    const [user, setUser] = useState([])
    useEffect(() => {
        getAllData()
    })

    const getAllData = async () => {
        await axios.get(`${endpoint})/users`)
    }

    const deleteData = () => {
        //
    }

  return (
    <div>ShowUserProfile</div>
  )
}

export default ShowUserProfile