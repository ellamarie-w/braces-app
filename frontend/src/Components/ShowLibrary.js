import React, {useEffect, useState} from 'react';
import axios from 'axios';
import {Link} from 'react-router-dom';
import { useResolvedPath } from 'react-router-dom';

const endpoint = 'http://localhost:8000/api'

const ShowLibrary = () => {

    const [ items, setItems ] = useState( [] )

    useEffect( () => {
        getAllItems()
    }, [])

    const getAllItems = async () => {
        const response = await axios.get(`${endpoint}/library`)
        setItems(response.data)
    }

    const deleteItems = async (id) => {
        await axios.delete(`${endpoint}/library/${id}`)
        getAllItems()
    }

    return (
        <div>
            <div className='d-grid gap-2'>
                <Link to="/create" className='btn btn-success'>Create</Link>
            </div>

            <table className='table table-striped'>
                <thead className='bg-secondary text-white'>
                    <tr>
                        <th>Title</th>
                        <th>Img</th>
                        <th>Author</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    { items.map( (item)=>(
                        <tr key={item.id}>
                        <td> {item.docTitle} </td>
                        <td> {item.docImage} </td>
                        <td> {item.docAuthor} </td>
                        <td> {item.docDescription} </td>
                    </tr>
                    )) }
                </tbody>
            </table>
        </div>
    )

}

export default ShowLibrary