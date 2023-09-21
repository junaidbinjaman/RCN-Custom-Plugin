/**
 *
 * Description: This component is the canvas for multi step form.
 * All the form elements will go inside this canvas
 * This component is imported by tsx to be renders within html element
 *
 * @subpackage  rcncp/public
 * @author      Junaid Bin Jaman <me@junaidbinjaman.com>
 * @since       version 1.0.0
 * @props       - this this a parent component doesn't accept any component
 */

import React from 'react';
import './MultiStepForm.scss';

const MultiStepForm = () => {
  return (
    <div className='rcncp-container rcncp-multi-step-form-canvas'>
      {/* Top bar section*/}
      <section className='top-meta-bar'>
        <p className='rcncp-paragraph'>
          <i className='fas fa-exclamation-circle rcncp-icon'></i>{' '}
          &nbsp;Application ID:
          <b>{' #20634'}</b>
        </p>
        <p className='rcncp-paragraph'>
          <i className='far fa-calendar-alt rcncp-icon'></i>
          &nbsp;Created at:
          <b>{' 09/15/2023'}</b>
        </p>
      </section>

      {/* Form section */}
      <section className='form-section'>
        <div className='form-wrapper'>
          <form>
            <div className='name-inputs'>
              <p>
                <label htmlFor='rcncp-form-first-name' className='src'>
                  First name
                </label>
                <input
                  type='text'
                  id='rcncp-form-first-name'
                  className='rcncp-input'
                />
              </p>
              <p>
                <label htmlFor='rcncp-form-last-name' className='src'>
                  Last name
                </label>
                <input
                  type='text'
                  id='rcncp-form-last-name'
                  className='rcncp-input'
                />
              </p>
            </div>
            <div>
              <p>
                <label htmlFor='rcncp-form-email' className='src'>
                  Email
                </label>
                <input
                  type='text'
                  id='rcncp-form-email'
                  className='rcncp-input'
                />
              </p>
            </div>
            <div>
              <p>
                <label htmlFor='rcncp-form-phone' className='src'>
                  Phone
                </label>
                <input
                  type='text'
                  id='rcncp-form-phone'
                  className='rcncp-input'
                />
              </p>
            </div>
            <div>
              <p>
                <label htmlFor='rcncp-form-topic' className='src'>
                  Select an option
                </label>
                <select name='' id='rcncp-form-topic' className='rcncp-select'>
                  <option value=''>Select option</option>
                  <option value='i am one'>Option 1</option>
                  <option value='i am two'>Option 2</option>
                  <option value='i am three'>Option 3</option>
                </select>
              </p>
            </div>
            <div>
              <p>
                <label htmlFor='rcncp-form-message' className='src'>
                  Type your message...
                </label>
                <textarea id='rcncp-form-message' className='rcncp-input' />
              </p>
            </div>
          </form>
        </div>
      </section>

      {/* Prev next button */}
      <section className='prev-next-button-section'>
        <div>
          <button className='rcncp-button'>Previous</button>
          <button className='rcncp-button'>Next</button>
        </div>
      </section>

      {/** Progress bar  */}

      {/* Login fumo popup */}
    </div>
  );
};

export default MultiStepForm;
