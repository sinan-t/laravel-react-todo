import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class TodosList extends Component {
  constructor () {
    super()
    this.state = {
      todos: []
    }
  }

  componentDidMount () {
    axios.get('/api/todos').then(response => {
      this.setState({
        todos: response.data
      })
    })
  }

  render () {
    const { todos } = this.state
    return (
      <div className='container py-4'>
        <div className='row justify-content-center'>
          <div className='col-md-8'>
            <div className='card'>
              <div className='card-header'>All todos</div>
              <div className='card-body'>
                <p className='btn btn-primary btn-sm mb-3' to='/create'>
                  Create new Todo
                </p>
                <ul className='list-group list-group-flush'>
                  {todos.map(todo => (
                    <p
                      className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                      key={todo.id}
                    >
                      {todo.text}
                    </p>
                  ))}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default TodosList
