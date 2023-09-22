/**
 *
 * Description: This component is the canvas for multi step form.
 * All the form elements will go inside this canvas
 * This component is imported by index.tsx to be render within html element created by WP shortcode
 *
 * @subpackage  rcncp/public
 * @author      Junaid Bin Jaman <me@junaidbinjaman.com>
 * @since       version 1.0.0
 * @props       - this this a parent component doesn't accept any props
 */

import React from 'react';
import './MultiStepForm.scss';

const MultiStepForm = () => {
  return (
    <div className='rcncp-container rcncp-multi-step-form-canvas'>
      {/* Top bar section */}
      {/* If user is not logged in, Display */}
      {/* `Please login to save your application progress. Learn More` */}
      {/* Instead of application meta */}
      <section className='top-meta-bar'>
        <p className='rcncp-paragraph'>
          <i className='fas fa-exclamation-circle rcncp-icon'></i>
          &nbsp;&nbsp;Application ID:
          <b>{' #20634'}</b>
        </p>
        <p className='rcncp-paragraph'>
          <i className='far fa-calendar-alt rcncp-icon'></i>
          &nbsp;&nbsp;Created at:
          <b>{' 09/15/2023'}</b>
        </p>
      </section>

      {/* Form section */}
      <section className='form-section'>
        <div className='form-wrapper'>
          <form>
            {/** Progress bar  */}
            <div className='left-side'>
              <div className='left-heading'>
                <h3>RCM Application</h3>
              </div>
              <div className='steps-content'>
                <h4>
                  Step <span className='step-number'>1</span> out of 50
                </h4>
                <p className='step-number-content active'>
                  Enter your personal information to get closer to companies.
                </p>
              </div>
              <ul className='progress-bar'>
                <li className='active'>Personal Information</li>
                <li>Education</li>
                <li>Work Experience</li>
                <li>User Photo</li>
                <li>User Photo</li>
                <li>User Photo</li>
                <li>User Photo</li>
                <li>User Photo</li>
              </ul>
            </div>
            <div className='right-side'>
              <div className='name-inputs'>
                <p>
                  <label
                    htmlFor='rcncp-form-first-name'
                    className='rcn-paragraph'
                  >
                    First name
                  </label>
                  <input
                    type='text'
                    id='rcncp-form-first-name'
                    className='rcncp-input'
                  />
                </p>
                <p>
                  <label
                    htmlFor='rcncp-form-last-name'
                    className='rcn-paragraph'
                  >
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
                  <label htmlFor='rcncp-form-email' className='rcn-paragraph'>
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
                  <label htmlFor='rcncp-form-phone' className='rcn-paragraph'>
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
                  <label htmlFor='rcncp-form-topic' className='rcn-paragraph'>
                    Select an option
                  </label>
                  <select
                    name=''
                    id='rcncp-form-topic'
                    className='rcncp-select'
                  >
                    <option value=''>Select option</option>
                    <option value='i am one'>Option 1</option>
                    <option value='i am two'>Option 2</option>
                    <option value='i am three'>Option 3</option>
                  </select>
                </p>
              </div>
            </div>
          </form>
        </div>
      </section>

      {/* Prev next button */}
      <section className='prev-next-button-section'>
        <div>
          <button className='rcncp-button'>
            <i className='fas fa-angle-left rcncp-icon'></i>&nbsp;&nbsp;Previous
          </button>
          <button className='rcncp-button'>
            Next&nbsp;&nbsp;<i className='fas fa-angle-right'></i>
          </button>
        </div>
      </section>
    </div>
  );
};

export default MultiStepForm;
