<?php
/*
Template Name: Discreet Health Checkout - High-Converting WooCommerce - Free Shipping
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Checkout - Complete Your Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://js.mollie.com/v1/mollie.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'system-ui', '-apple-system', 'sans-serif'],
                        'inter': ['Inter', 'system-ui', '-apple-system', 'sans-serif']
                    },
                    colors: {
                        'trust-green': '#3CB371',
                        'medical-blue': '#3387CA',
                        'convert-red': '#FF4C4C',
                        'convert-orange': '#FF7A00',
                        'light-green': '#F0FDF4'
                    }
                }
            }
        }
    </script>

    <style>
        /* Icon styles for consistent display */
        .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            font-size: inherit;
            line-height: 1;
            vertical-align: middle;
            margin-right: 0.25em;
        }
        
        .icon-sm {
            width: 1em;
            height: 1em;
        }
        
        .icon-lg {
            width: 1.5em;
            height: 1.5em;
        }
        
        .icon-xl {
            width: 2em;
            height: 2em;
        }
        
        /* Enhanced responsive design fixes */
        @media (max-width: 640px) {
            /* Fix mobile layout issues */
            .mobile-card {
                margin-left: -0.5rem;
                margin-right: -0.5rem;
                border-radius: 12px;
            }
            
            .mobile-package-grid {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }
            
            .mobile-package-card {
                min-width: 180px;
                padding: 0.75rem;
            }
        }
        
        @media (max-width: 480px) {
            /* Ultra-small screen fixes */
            .mobile-package-card {
                min-width: 160px;
                padding: 0.5rem;
            }
            
            .mobile-package-card .text-lg {
                font-size: 1rem !important;
            }
            
            .mobile-package-card .text-xs {
                font-size: 0.7rem !important;
            }
        }
        
        @media (max-width: 360px) {
            /* Extra small screens (older phones) */
            .mobile-package-card {
                min-width: 140px;
            }
            
            .text-2xl {
                font-size: 1.25rem !important;
            }
            
            .text-xl {
                font-size: 1.125rem !important;
            }
        }
        
        /* Ensure responsive layout for all screen sizes */
        .container {
            width: 100%;
            max-width: 100%;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        @media (min-width: 640px) {
            .container {
                max-width: 640px;
                margin-left: auto;
                margin-right: auto;
            }
        }
        
        @media (min-width: 768px) {
            .container {
                max-width: 768px;
            }
        }
        
        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
            }
        }
        
        @media (min-width: 1280px) {
            .container {
                max-width: 1280px;
            }
        }
        
        /* Fix grid layouts on small screens */
        @media (max-width: 768px) {
            .grid {
                display: block !important;
            }
            
            .grid > * {
                margin-bottom: 1rem;
            }
            
            .grid > *:last-child {
                margin-bottom: 0;
            }
            
            /* Desktop layout should be hidden on mobile */
            .desktop-layout {
                display: none !important;
            }
        }
        
        /* Ensure text is readable on all screen sizes */
        @media (max-width: 640px) {
            .text-4xl, .text-5xl {
                font-size: 2rem !important;
                line-height: 2.5rem !important;
            }
            
            .text-3xl {
                font-size: 1.75rem !important;
                line-height: 2.25rem !important;
            }
            
            .text-2xl {
                font-size: 1.5rem !important;
                line-height: 2rem !important;
            }
            
            .text-xl {
                font-size: 1.25rem !important;
                line-height: 1.75rem !important;
            }
            
            .text-lg {
                font-size: 1.125rem !important;
                line-height: 1.75rem !important;
            }
        }
        
        /* Fix button sizing on mobile */
        @media (max-width: 640px) {
            .btn-primary {
                min-height: 48px !important;
                font-size: 1rem !important;
                padding: 0.75rem 1.5rem !important;
            }
        }
        
        /* Fix form inputs on mobile */
        @media (max-width: 640px) {
            .form-input {
                min-height: 48px !important;
                font-size: 16px !important; /* Prevent zoom on iOS */
                padding: 12px 16px !important;
            }
            
            .phone-input-container {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .country-code-select {
                min-width: 100%;
            }
        }
        
        /* Fix trust icons grid on mobile */
        @media (max-width: 640px) {
            .trust-icons {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
            
            .trust-icon {
                padding: 0.75rem;
            }
            
            .trust-icon svg {
                width: 32px;
                height: 32px;
            }
            
            .trust-icon h4 {
                font-size: 12px;
            }
            
            .trust-icon p {
                font-size: 11px;
            }
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            scroll-behavior: smooth;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', system-ui, -apple-system, sans-serif;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.025em;
        }
        
        /* Desktop Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, #3CB371 0%, #2E8B57 50%, #3CB371 100%);
            background-size: 200% 100%;
            border: 3px solid #2E8B57;
            box-shadow: 
                0 8px 25px rgba(60, 179, 113, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2),
                inset 0 -1px 0 rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            min-height: 56px;
            font-weight: 800;
            text-transform: none;
            border-radius: 16px;
        }
        
        .btn-primary:hover, .btn-primary:active {
            background-position: 100% 0;
            transform: translateY(-2px);
            box-shadow: 
                0 12px 35px rgba(60, 179, 113, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.3),
                inset 0 -1px 0 rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }
        
        /* Order Bump Styles */
        .order-bump {
            border: 3px solid #e2e8f0;
            border-radius: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            animation: pulse-subtle 3s infinite;
        }
        
        .order-bump:hover {
            border-color: #3CB371;
            box-shadow: 0 8px 25px rgba(60, 179, 113, 0.15);
            animation: none;
        }
        
        .order-bump.selected {
            border-color: #3CB371;
            background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%);
            box-shadow: 0 8px 25px rgba(60, 179, 113, 0.2);
            animation: none;
        }
        
        @keyframes pulse-subtle {
            0%, 100% { 
                border-color: #e2e8f0;
                box-shadow: 0 0 0 0 rgba(60, 179, 113, 0);
            }
            50% { 
                border-color: #cbd5e1;
                box-shadow: 0 0 0 4px rgba(60, 179, 113, 0.1);
            }
        }
        
        /* Radio Button Styles */
        .order-bump-radio {
            width: 24px;
            height: 24px;
            border: 3px solid #d1d5db;
            border-radius: 50%;
            position: relative;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }
        
        .order-bump-radio.checked {
            border-color: #3CB371;
            background: #3CB371;
        }
        
        .order-bump-radio.checked::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }
        
        /* Form Styles */
        .form-input {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 16px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fafbfc;
            min-height: 56px;
        }
        
        .form-input:focus {
            border-color: #3CB371;
            box-shadow: 0 0 0 3px rgba(60, 179, 113, 0.1);
            background: white;
            outline: none;
        }
        
        .form-input.error {
            border-color: #ef4444;
            background: #fef2f2;
        }
        
        .error-message {
            color: #ef4444;
            font-size: 14px;
            font-weight: 500;
            margin-top: 4px;
            display: block;
        }
        
        /* Loading Overlay */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .loading-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid #3CB371;
            border-top: 4px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Mobile Optimizations */
        @media (max-width: 768px) {
            .mobile-section {
                margin-bottom: 1rem;
            }
            
            .mobile-card {
                background: white;
                border-radius: 16px;
                padding: 1rem;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 1rem;
            }
            
            .mobile-package-grid {
                display: flex;
                gap: 0.75rem;
                overflow-x: auto;
                padding: 0.5rem 0;
                scroll-snap-type: x mandatory;
                scrollbar-width: none;
                -ms-overflow-style: none;
                position: relative;
            }
            
            .mobile-package-grid::-webkit-scrollbar {
                display: none;
            }
            
            .mobile-package-card {
                min-width: 200px;
                background: white;
                border: 2px solid #e2e8f0;
                border-radius: 12px;
                padding: 1rem;
                text-align: center;
                cursor: pointer;
                transition: all 0.3s ease;
                scroll-snap-align: start;
                flex-shrink: 0;
            }
            
            .mobile-package-card.selected {
                border-color: #3CB371;
                background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            }
            
            /* Enhanced scroll hint for mobile packages */
            .scroll-hint {
                position: absolute;
                right: 0;
                top: 0;
                bottom: 0;
                width: 40px;
                background: linear-gradient(to left, rgba(255,255,255,0.95), transparent);
                pointer-events: none;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
                border-radius: 0 12px 12px 0;
            }
            
            .scroll-hint::after {
                content: '→';
                color: #3CB371;
                font-weight: bold;
                font-size: 20px;
                animation: bounce-right 2s infinite;
                text-shadow: 0 1px 3px rgba(0,0,0,0.3);
            }
            
            @keyframes bounce-right {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateX(0);
                }
                40% {
                    transform: translateX(6px);
                }
                60% {
                    transform: translateX(3px);
                }
            }
            
            .flex.items-center.space-x-2 {
                font-size: 14px !important;
                line-height: 20px !important;
                flex-direction: row !important;
            }
            
            span#mobile-total-price {
                font-weight: 700 !important;
            }
            
            span#mobile-shipping-status {
                font-size: 11px !important;
            }
            
            /* Additional mobile fixes */
            .mobile-product-image-container {
                flex-shrink: 0;
            }
            
            .mobile-card .flex {
                align-items: flex-start;
            }
            
            .mobile-card .flex > div:last-child {
                flex: 1;
                min-width: 0;
            }
        }
        
        /* Desktop Layout */
        @media (min-width: 1024px) {
            .desktop-layout {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 3rem;
                max-width: 1200px;
                margin: 0 auto;
                padding: 2rem;
            }
        }
        
        /* Hide mobile on desktop */
        @media (min-width: 768px) {
            .mobile-only {
                display: none !important;
            }
        }
        
        /* Hide desktop on mobile */
        @media (max-width: 767px) {
            .desktop-only {
                display: none !important;
            }
        }

        /* Real-time purchase notifications */
        .purchase-notification {
            position: fixed;
            top: 100px;
            right: 20px;
            background: white;
            border: 2px solid #3CB371;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            transform: translateX(400px);
            transition: all 0.5s ease;
            max-width: 300px;
        }
        
        .purchase-notification.show {
            transform: translateX(0);
        }
        
        .notification-close {
            position: absolute;
            top: 8px;
            right: 8px;
            background: #f3f4f6;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
            color: #6b7280;
            transition: all 0.2s ease;
        }
        
        .notification-close:hover {
            background: #e5e7eb;
            color: #374151;
        }
        
        .trust-icons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin: 1rem 0;
        }
        
        .trust-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
        }
        
        .trust-icon svg {
            width: 48px;
            height: 48px;
            margin-bottom: 0.5rem;
            color: #3CB371;
        }
        
        .trust-icon h4 {
            font-size: 14px;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 0.25rem;
        }
        
        .trust-icon p {
            font-size: 12px;
            color: #6b7280;
            line-height: 1.3;
        }

        /* Phone input with country code */
        .phone-input-container {
            display: flex;
            gap: 8px;
        }
        
        .country-code-select {
            min-width: 100px;
            flex-shrink: 0;
        }
        
        .phone-number-input {
            flex: 1;
        }

        /* Video Reviews Popup */
        .video-popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .video-popup-overlay.show {
            opacity: 1;
            visibility: visible;
        }
        
        .video-popup {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            max-width: 400px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
        }
        
        .video-container {
            position: relative;
            width: 100%;
            height: 300px;
            background: #f3f4f6;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            overflow: hidden;
        }
        
        .video-placeholder {
            text-align: center;
            color: #6b7280;
        }
        
        .video-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .nav-button {
            background: #3CB371;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .nav-button:hover {
            background: #2E8B57;
            transform: scale(1.1);
        }
        
        .nav-button:disabled {
            background: #d1d5db;
            cursor: not-allowed;
            transform: none;
        }
        
        .video-indicators {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        
        .indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #d1d5db;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .indicator.active {
            background: #3CB371;
            transform: scale(1.2);
        }
        
        .popup-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #f3f4f6;
            border: none;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            color: #6b7280;
            transition: all 0.2s ease;
        }
        
        .popup-close:hover {
            background: #e5e7eb;
            color: #374151;
        }

        /* Enhanced Product Image Styles */
        .product-image-container {
            position: relative;
            display: inline-block;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border: 4px solid #3CB371;
            box-shadow: 
                0 10px 30px rgba(60, 179, 113, 0.2),
                0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .product-image-container:hover {
            transform: scale(1.02);
            box-shadow: 
                0 15px 40px rgba(60, 179, 113, 0.3),
                0 6px 20px rgba(0, 0, 0, 0.15);
        }
        
        .product-image-container .usa-flag {
            position: absolute;
            bottom: 8px;
            right: 8px;
            width: 32px;
            height: 24px;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }
        
        .mobile-product-image-container {
            position: relative;
            display: inline-block;
            border-radius: 16px;
            overflow: hidden;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border: 3px solid #3CB371;
            box-shadow: 
                0 8px 25px rgba(60, 179, 113, 0.2),
                0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .mobile-product-image-container .usa-flag {
            position: absolute;
            bottom: 6px;
            right: 6px;
            width: 24px;
            height: 18px;
            border-radius: 3px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }
        
        /* Payment Method Styles */
        .payment-method-wrapper.selected {
            border-color: #3CB371;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        
        .mobile-payment-method-wrapper.selected {
            border-color: #3CB371;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        
        .payment-form-container,
        .mobile-payment-form-container {
            transition: all 0.3s ease;
        }

        /* Delivery Time Badge Styles */
        .delivery-badge {
            background: linear-gradient(135deg, #3CB371 0%, #2E8B57 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 2px 8px rgba(60, 179, 113, 0.3);
            animation: pulse-delivery 2s infinite;
        }
        
        .delivery-badge-mobile {
            background: linear-gradient(135deg, #3CB371 0%, #2E8B57 100%);
            color: white;
            padding: 0.375rem 0.75rem;
            border-radius: 16px;
            font-weight: bold;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            box-shadow: 0 2px 6px rgba(60, 179, 113, 0.3);
        }
        
        @keyframes pulse-delivery {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 2px 8px rgba(60, 179, 113, 0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 4px 12px rgba(60, 179, 113, 0.4);
            }
        }

        /* No Prescription Required Badge */
        .no-rx-badge {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
            color: #8B4513;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.3);
            border: 2px solid #FFD700;
        }
        
        .no-rx-badge-mobile {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
            color: #8B4513;
            padding: 0.375rem 0.75rem;
            border-radius: 16px;
            font-weight: bold;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            box-shadow: 0 2px 6px rgba(255, 215, 0, 0.3);
            border: 2px solid #FFD700;
        }

        /* Bank Statement Info */
        .bank-statement-info {
            background: #F0F8FF;
            border: 2px solid #4682B4;
            border-radius: 12px;
            padding: 1rem;
            margin-top: 1rem;
        }
        
        .bank-statement-info h3 {
            color: #4682B4;
            font-size: 0.875rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        .bank-statement-info p {
            color: #2F4F4F;
            font-size: 0.75rem;
            margin: 0;
        }

        /* FDA Badge Styles */
        .fda-badge {
            background: linear-gradient(135deg, #1E40AF 0%, #3B82F6 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 2px 8px rgba(30, 64, 175, 0.3);
            border: 2px solid #1E40AF;
        }
        
        .fda-badge-mobile {
            background: linear-gradient(135deg, #1E40AF 0%, #3B82F6 100%);
            color: white;
            padding: 0.375rem 0.75rem;
            border-radius: 16px;
            font-weight: bold;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            box-shadow: 0 2px 6px rgba(30, 64, 175, 0.3);
            border: 2px solid #1E40AF;
        }

        /* Reset to Original Button */
        .reset-to-original-btn {
            background: linear-gradient(135deg, #6B7280 0%, #4B5563 100%);
            color: white;
            border: 2px solid #4B5563;
            border-radius: 12px;
            padding: 0.75rem 1.5rem;
            font-weight: bold;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .reset-to-original-btn:hover {
            background: linear-gradient(135deg, #4B5563 0%, #374151 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(75, 85, 99, 0.3);
        }
        
        .reset-to-original-btn:active {
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 font-inter">

    <!-- Video Reviews Popup -->
    <div class="video-popup-overlay" id="videoPopup" style="display: none">
        <div class="video-popup">
            <button class="popup-close" onclick="closeVideoPopup()">×</button>

            <h2 class="text-2xl font-bold text-center mb-4">
                <svg class="icon icon-lg inline-block text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                See What Our Customers Say
            </h2>
            <p class="text-gray-600 text-center mb-6">Real reviews from verified customers</p>
            
            <div class="video-container" id="videoContainer">
                <div class="video-placeholder">
                    <div class="text-6xl mb-4">
                        <svg class="w-16 h-16 mx-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2" id="videoTitle">Mar*** from Texas</h3>
                    <p class="text-sm text-gray-600" id="videoDescription">"My confidence is back completely!"</p>
                    <div class="flex justify-center mt-2">
                        <div class="flex gap-1">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="video-navigation">
                <button class="nav-button" id="prevBtn" onclick="previousVideo()">‹</button>
                <div class="video-indicators" id="videoIndicators">
                    <div class="indicator active"></div>
                    <div class="indicator"></div>
                    <div class="indicator"></div>
                    <div class="indicator"></div>
                    <div class="indicator"></div>
                </div>
                <button class="nav-button" id="nextBtn" onclick="nextVideo()">›</button>
            </div>
            
            <div class="flex gap-3">
                <button onclick="closeVideoPopup()" class="flex-1 bg-gray-200 text-gray-800 py-3 px-6 rounded-xl font-bold hover:bg-gray-300 transition-colors">
                    Skip Reviews
                </button>
                <button onclick="closeVideoPopup()" class="flex-1 btn-primary text-white py-3 px-6 rounded-xl font-bold">
                    Continue to Order
                </button>
            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="bg-white rounded-2xl p-8 text-center">
            <div class="loading-spinner mx-auto mb-4"></div>
            <h3 class="text-xl font-bold text-gray-900 mb-2" id="loadingTitle">Processing Your Order...</h3>
            <p class="text-gray-600" id="loadingMessage">Please wait while we secure your health solution</p>
        </div>
    </div>

    <!-- Real-time Purchase Notifications -->
    <div class="purchase-notification" id="purchaseNotification">
        <button class="notification-close" onclick="closePurchaseNotification()">×</button>
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-trust-green rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zM8 6a2 2 0 114 0v1H8V6z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div>
                <p class="font-bold text-gray-900 text-sm" id="notificationText">Mar*** from Texas just ordered 5 packs</p>
                <p class="text-gray-600 text-xs" id="notificationTime">2 minutes ago</p>
            </div>
        </div>
    </div>

    <!-- MOBILE LAYOUT -->
    <div class="mobile-only">
        
        <!-- 🔴 Sticky Top Bar: Countdown Timer -->
        <div class="bg-convert-orange text-white py-3 px-4 text-center">
            <div class="flex items-center justify-center gap-2">
                <span class="font-bold text-sm">
                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                    </svg>
                    Your Offer Expires in
                </span>
                <div id="mobile-countdown" class="font-black text-lg">04:58:00</div>
            </div>
        </div>

        <!-- 🔒 Secure Checkout Header -->
        <div class="mobile-card">
            <div class="text-center">
                <h1 class="text-2xl font-black text-gray-900 mb-2 flex items-center justify-center gap-2">
                    <svg class="icon icon-lg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg>
                    Secure Checkout
                </h1>
                <p class="text-base text-gray-600 font-medium mb-4">
                    Complete your order in under 2 minutes
                </p>
                <div class="flex items-center justify-center gap-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Stripe_Logo%2C_revised_2016.svg" alt="Stripe" class="h-6">
                </div>
                
                <!-- Trust Message -->
                <div class="mt-4 bg-trust-green/10 border border-trust-green/20 rounded-lg p-3">
                    <p class="text-trust-green font-bold text-sm">
                        <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Used by over 1,000+ satisfied men worldwide
                    </p>
                </div>

                <!-- FDA and No Prescription Badges -->
                <div class="mt-3 flex flex-wrap gap-2 justify-center">
                    <span class="fda-badge-mobile">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        FDA Approved Facility
                    </span>
                    <span class="no-rx-badge-mobile">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"/>
                        </svg>
                        No Prescription Required
                    </span>
                </div>
            </div>
        </div>

        <!-- 🛒 Product Snapshot Card -->
        <div class="mobile-card">
            <div class="flex items-center gap-4">
                <div class="mobile-product-image-container">
                    <img 
                        src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=200&h=200&fit=crop" 
                        alt="Viagra" 
                        class="w-24 h-24 object-cover"
                    />
                    <img 
                        src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" 
                        alt="USA" 
                        class="usa-flag"
                    />
                </div>
                <div class="flex-1">
                    <h3 id="mobile-product-title" class="font-black text-gray-900 text-lg mb-1">
                        Viagra 50mg
                    </h3>
                    <p class="text-sm text-gray-600 mb-2">
                        <svg class="icon icon-sm inline-block text-medical-blue" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Doctor-recommended vitality enhancer
                    </p>
                    <p class="text-sm text-medical-blue font-bold mb-2">#1 prescribed solution in USA</p>
                    <div class="flex items-center gap-2 mb-2">
                        <span id="mobile-product-price" class="text-xl font-black text-trust-green">
                            $2.49
                        </span>
                        <span class="text-sm line-through text-gray-400" id="mobile-black-market-price">
                            $3.74
                        </span>
                    </div>
                    <div class="flex gap-2 flex-wrap mb-2">
                        <span class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold">
                            4 PILLS PER PACK 50mg
                        </span>
                        <span class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold">
                            <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            100% genuine product
                        </span>
                        <span class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold" id="mobile-shipping-badge">
                            FREE SHIPPING
                        </span>
                        <span class="bg-medical-blue text-white px-2 py-1 rounded-full text-xs font-bold">
                            30-Day Guarantee
                        </span>
                        <span class="delivery-badge-mobile">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707L16 7.586A1 1 0 0015.414 7H14z"/>
                            </svg>
                            Delivery: 2-5 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-3 bg-red-50 border border-red-200 rounded-lg p-2 text-center">
                <span class="text-red-600 font-bold text-sm">
                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    Only 23 packs Left!
                </span>
            </div>
            <div class="mt-2 bg-yellow-50 border border-yellow-200 rounded-lg p-2 text-center">
                <span class="text-yellow-700 font-bold text-xs">
                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                    </svg>
                    Market price: 50% higher!
                </span>
            </div>
        </div>

        <!-- 📦 Package Selection -->
        <div class="mobile-card">
            <div class="flex items-center justify-between mb-3">
                <h3 class="font-bold text-gray-900">
                    <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"/>
                    </svg>
                    Choose Your Package
                </h3>
                <div class="text-trust-green text-sm font-bold bg-trust-green/10 px-2 py-1 rounded-full">← Swipe to see more</div>
            </div>
            
            <!-- Reset to Original Button for Mobile -->
            <button onclick="resetToOriginalCart()" class="reset-to-original-btn w-full mb-3" id="mobile-reset-btn" style="display: none;">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                </svg>
                Back to Single Price ($2.49)
            </button>
            
            <div class="relative">
                <div class="mobile-package-grid">
                    <!-- Package 1 -->
                    <div class="mobile-package-card" onclick="selectMobilePackage(1, 'Viagra 50mg', '$2.49')">
                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                            4 PILLS PER PACK 50mg
                        </div>
                        <div class="text-sm font-bold text-gray-900 mb-1">1 Pack</div>
                        <div class="text-xs text-gray-600 mb-1">4 pills total</div>
                        <div class="text-lg font-black text-trust-green mb-1">$2.49</div>
                        <div class="text-xs text-gray-500 mb-1">$2.49 per pack</div>
                        <div class="text-xs line-through text-red-500 mb-2">Market: $3.74</div>
                        <div class="text-xs text-trust-green font-bold mb-2">+ FREE SHIPPING</div>
                        <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            STARTER
                        </span>
                    </div>
                    
                    <!-- Package 2 -->
                    <div class="mobile-package-card" onclick="selectMobilePackage(2, 'Viagra 50mg', '$4.98')">
                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                            4 PILLS PER PACK 50mg
                        </div>
                        <div class="text-sm font-bold text-gray-900 mb-1">2 Packs</div>
                        <div class="text-xs text-gray-600 mb-1">8 pills total</div>
                        <div class="text-lg font-black text-trust-green mb-1">$4.98</div>
                        <div class="text-xs text-gray-500 mb-1">$2.49 per pack</div>
                        <div class="text-xs line-through text-red-500 mb-2">Market: $7.47</div>
                        <div class="text-xs text-trust-green font-bold mb-2">+ FREE SHIPPING</div>
                        <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            POPULAR
                        </span>
                    </div>
                    
                    <!-- Package 3 -->
                    <div class="mobile-package-card" onclick="selectMobilePackage(3, 'Viagra 50mg', '$12.45')">
                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                            4 PILLS PER PACK 50mg
                        </div>
                        <div class="text-sm font-bold text-gray-900 mb-1">5 Packs</div>
                        <div class="text-xs text-gray-600 mb-1">20 pills total</div>
                        <div class="text-lg font-black text-trust-green mb-1">$12.45</div>
                        <div class="text-xs text-gray-500 mb-1">$2.49 per pack</div>
                        <div class="text-xs line-through text-red-500 mb-2">Market: $18.70</div>
                        <div class="text-xs text-trust-green font-bold mb-2">+ FREE SHIPPING</div>
                        <span class="bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            BEST VALUE
                        </span>
                    </div>
                    
                    <!-- Package 4 -->
                    <div class="mobile-package-card" onclick="selectMobilePackage(4, 'Viagra 50mg', '$24.90')">
                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                            4 PILLS PER PACK 50mg
                        </div>
                        <div class="text-sm font-bold text-gray-900 mb-1">10 Packs</div>
                        <div class="text-xs text-gray-600 mb-1">40 pills total</div>
                        <div class="text-lg font-black text-trust-green mb-1">$24.90</div>
                        <div class="text-xs text-gray-500 mb-1">$2.49 per pack</div>
                        <div class="text-xs line-through text-red-500 mb-2">Market: $37.35</div>
                        <div class="text-xs text-trust-green font-bold mb-2">+ FREE SHIPPING</div>
                        <span class="bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            PREMIUM
                        </span>
                    </div>
                </div>
                <div class="scroll-hint"></div>
            </div>
        </div>

        <!-- 🛡️ Trust Badges Section (Mobile) -->
        <div class="mobile-card">
            <h3 class="font-bold text-gray-900 mb-3 text-center">
                <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Your Privacy Guaranteed
            </h3>
            <div class="trust-icons">
                <div class="trust-icon">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                    <h4>100% DISCREET PACKAGING</h4>
                    <p>No one knows what's inside</p>
                </div>
                <div class="trust-icon">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                    <h4>NO CUSTOMS ISSUES</h4>
                    <p>We handle everything</p>
                </div>
                <div class="trust-icon">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg>
                    <h4>SSL SECURE CHECKOUT</h4>
                    <p>Bank-level encryption</p>
                </div>
                <div class="trust-icon">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                    </svg>
                    <h4>REFUND/RESHIP GUARANTEE</h4>
                    <p>If seized, we handle everything</p>
                </div>
            </div>
        </div>

        <!-- 🧾 Billing & Shipping Form -->
        <div class="mobile-card">
            <h3 class="font-bold text-gray-900 mb-4">
                <svg class="icon icon-lg inline-block text-medical-blue" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                Billing Information
            </h3>
            
            <form id="mobile-checkout-form" class="checkout-form" novalidate>
                
                <!-- Name / Email / Phone -->
                <div class="space-y-4 mb-6">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">First Name *</label>
                            <input type="text" name="billing_first_name" class="form-input w-full text-sm" required>
                            <span class="error-message" id="error-billing_first_name"></span>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Last Name *</label>
                            <input type="text" name="billing_last_name" class="form-input w-full text-sm" required>
                            <span class="error-message" id="error-billing_last_name"></span>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Email Address *</label>
                        <input type="email" name="billing_email" class="form-input w-full text-sm" required>
                        <span class="error-message" id="error-billing_email"></span>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Phone Number *</label>
                        <div class="phone-input-container">
                            <select name="phone_country_code" class="form-input country-code-select text-sm" required>
                                <option value="+1" selected>🇺🇸 +1</option>
                                <option value="+44">🇬🇧 +44</option>
                                <option value="+1">🇨🇦 +1</option>
                            </select>
                            <input type="tel" name="billing_phone" class="form-input phone-number-input text-sm" placeholder="123-456-7890" required>
                        </div>
                        <span class="error-message" id="error-billing_phone"></span>
                    </div>
                </div>
                
                <!-- Address / City / Zip / Country -->
                <div class="space-y-4 mb-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Address *</label>
                        <input type="text" name="billing_address_1" class="form-input w-full text-sm" required>
                        <span class="error-message" id="error-billing_address_1"></span>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">City *</label>
                            <input type="text" name="billing_city" class="form-input w-full text-sm" required>
                            <span class="error-message" id="error-billing_city"></span>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Postal Code *</label>
                            <input type="text" name="billing_postcode" class="form-input w-full text-sm" required>
                            <span class="error-message" id="error-billing_postcode"></span>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Country *</label>
                        <select name="billing_country" class="form-input w-full text-sm" required>
                            <option value="US" selected>🇺🇸 United States</option>
                            <option value="GB">🇬🇧 United Kingdom</option>
                            <option value="CA">🇨🇦 Canada</option>
                        </select>
                        <span class="error-message" id="error-billing_country"></span>
                    </div>
                </div>
                
                <!-- 💳 Payment Methods -->
                <div class="mb-6">
                    <h3 class="font-bold text-gray-900 mb-4">
                        <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                        </svg>
                        Payment Method
                    </h3>
                    
                    <div class="space-y-3" id="mobile-payment-methods-container">
                        <!-- Credit Card -->
                        <div class="mobile-payment-method-wrapper border-2 border-gray-200 rounded-lg overflow-hidden hover:border-trust-green transition-colors selected" data-gateway="stripe">
                            <label class="flex items-center gap-3 p-3 cursor-pointer">
                                <input type="radio" name="payment_method" value="stripe" class="w-4 h-4 text-trust-green mobile-payment-method-radio" checked>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="text-lg">
                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                    <span class="font-bold text-sm">Credit Card</span>
                                    <div class="flex gap-1">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="h-4">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-4">
                                    </div>
                                </div>
                            </label>
                            
                            <!-- Mobile Payment Gateway Form -->
                            <div class="mobile-payment-form-container" id="mobile-payment-form-stripe" style="display: block;">
                                <div class="p-3 pt-0 border-t border-gray-200">
                                    <div class="space-y-3">
                                        <div>
                                            <label class="block text-sm font-bold text-gray-700 mb-1">Card Number *</label>
                                            <input type="text" name="card_number" class="form-input w-full text-sm" placeholder="1234 5678 9012 3456" required>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div>
                                                <label class="block text-sm font-bold text-gray-700 mb-1">Expiry *</label>
                                                <input type="text" name="card_expiry" class="form-input w-full text-sm" placeholder="MM/YY" required>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-bold text-gray-700 mb-1">CVC *</label>
                                                <input type="text" name="card_cvc" class="form-input w-full text-sm" placeholder="123" required>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-bold text-gray-700 mb-1">Cardholder Name *</label>
                                            <input type="text" name="card_name" class="form-input w-full text-sm" placeholder="John Doe" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="error-message" id="error-payment_method"></span>

                    <!-- Bank Statement Info for Mobile -->
                    <div class="bank-statement-info">
                        <h3>
                            <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H7z"/>
                            </svg>
                            Bank Statement Descriptor
                        </h3>
                        <p>This charge will appear as "<strong>VHealthLLC</strong>" on your statement for complete discretion.</p>
                    </div>
                </div>
                
                <!-- Hidden field to store selected package -->
                <input type="hidden" id="selected_package_id" name="selected_package_id" value="">
            </form>

            <!-- Mobile Submit Button (After Form) -->
            <div class="mt-6">
                <div class="text-center mb-4">
                    <p class="text-base text-convert-red font-bold">
                        <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        Only <span id="mobile-countdown-mini">4:53</span> left to secure your discount
                    </p>
                </div>
                
                <button onclick="submitCheckoutForm('mobile')" id="mobile-submit-btn" class="btn-primary w-full text-white text-lg py-4 mb-4">
                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Yes, I Want To Complete My Order
                </button>
                
                <div class="text-center">
                    <div class="flex items-center justify-center gap-4 flex-wrap text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                            </svg>
                            256-bit SSL Secure
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Guaranteed Delivery
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            <span id="mobile-shipping-guarantee">Free Shipping</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DESKTOP LAYOUT -->
    <div class="desktop-only">
        <!-- Countdown Timer Header -->
        <div class="bg-convert-red text-white py-3 px-4 text-center">
            <div class="flex items-center justify-center gap-2 flex-wrap text-base">
                <span class="font-bold">
                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                    </svg>
                    Your Offer Reserved | Expires in
                </span>
                <div id="countdown" class="font-black text-xl">04:59:32</div>
            </div>
        </div>

        <!-- Main Container -->
        <div class="min-h-screen">
            <!-- 2-Column Layout -->
            <div class="max-w-7xl mx-auto px-6 py-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    
                    <!-- LEFT COLUMN: Product Summary & Social Proof -->
                    <div class="space-y-8">
                        
                        <!-- Header -->
                        <div class="text-center lg:text-left">
                            <h1 class="text-4xl font-black text-gray-900 mb-6">
                                <svg class="icon icon-xl inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                                Secure Checkout
                            </h1>
                            <p class="text-xl text-gray-600 font-medium mb-4">
                                Complete your order in under 2 minutes
                            </p>
                            <!-- FDA Approved Message -->
                            <div class="mb-4 bg-blue-50 border border-blue-200 rounded-lg p-3">
                                <p class="text-blue-800 font-bold text-base">
                                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Manufactured in FDA-approved facilities with the highest quality standards for your safety and peace of mind
                                </p>
                            </div>
                            <!-- No Prescription and FDA Badges for Desktop -->
                            <div class="flex justify-center lg:justify-start gap-3 flex-wrap">
                                <span class="fda-badge">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    FDA Approved Facility
                                </span>
                                <span class="no-rx-badge">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"/>
                                    </svg>
                                    No Prescription Required • 100% Legal
                                </span>
                            </div>
                        </div>
                        
                        <!-- Product Summary -->
                        <div class="bg-white rounded-3xl p-8 shadow-xl border border-trust-green/20">
                            <div class="text-center mb-8">
                                <div class="product-image-container mx-auto mb-6">
                                    <img 
                                        src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=300&h=300&fit=crop" 
                                        alt="Viagra" 
                                        class="w-64 h-64 object-cover"
                                    />
                                    <img 
                                        src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" 
                                        alt="USA" 
                                        class="usa-flag"
                                    />
                                </div>
                                <h2 id="desktop-product-title" class="text-2xl font-black text-gray-900 mb-3">
                                    Viagra 50mg
                                </h2>
                                <p class="text-gray-600 text-lg font-medium mb-2">
                                    <svg class="icon icon-sm inline-block text-medical-blue" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Doctor-recommended vitality enhancer for confidence
                                </p>
                                <p class="text-medical-blue font-bold text-lg mb-2">
                                    The most prescribed solution in the USA
                                </p>
                                <p class="text-trust-green font-bold text-base mb-2">
                                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    100% genuine product
                                </p>
                                <p class="text-trust-green font-bold text-base mb-4" id="desktop-pills-info">
                                    4 PILLS PER PACK 50mg
                                </p>
                                <!-- Delivery Time and No Rx Badge for Desktop -->
                                <div class="mb-4 flex justify-center gap-3 flex-wrap">
                                    <span class="delivery-badge">
                                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707L16 7.586A1 1 0 0015.414 7H14z"/>
                                        </svg>
                                        Fast Delivery: 2-5 Days
                                    </span>
                                    <span class="no-rx-badge">
                                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                        </svg>
                                        No Prescription Needed
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Cart Items Display -->
                            <div class="space-y-4 mb-8" id="desktop-cart-items">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                    <div class="flex-1">
                                        <h3 class="font-bold text-gray-900" id="cart-item-title">
                                            Viagra 50mg
                                        </h3>
                                        <p class="text-gray-600 text-base" id="cart-item-quantity">
                                            Quantity: 1
                                        </p>
                                        <p class="text-sm text-gray-500" id="cart-item-pills">4 PILLS PER PACK 50mg</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="font-bold text-trust-green text-xl" id="cart-item-total">
                                            $2.49
                                        </span>
                                        <p class="text-sm line-through text-red-500" id="cart-black-market-price">
                                            Market price: $3.74
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Order Summary -->
                            <div class="space-y-3 mb-8" id="desktop-order-summary">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">Subtotal</span>
                                    <span class="font-bold" id="desktop-subtotal">$2.49</span>
                                </div>
                                <div class="flex justify-between items-center" id="desktop-shipping-row">
                                    <span class="font-medium">Shipping</span>
                                    <span class="font-bold text-trust-green" id="desktop-shipping-cost">FREE</span>
                                </div>
                                
                                <hr class="border-gray-300">
                                <div class="flex justify-between items-center text-2xl font-black">
                                    <span>Total</span>
                                    <span class="text-trust-green" id="desktop-total">$2.49</span>
                                </div>
                            </div>
                            
                            <!-- Urgency Alert -->
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-bold text-red-800">
                                            <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                            </svg>
                                            Only 23 packs left in stock!
                                        </p>
                                        <p class="text-sm text-red-700">
                                            High demand - secure yours before it's gone
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Market Price Warning -->
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-bold text-yellow-800">
                                            <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                            </svg>
                                            Market prices are 50% higher!
                                        </p>
                                        <p class="text-sm text-yellow-700">
                                            Save money and stay safe with our verified pharmacy
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Trust Badges Section -->
                        <div class="bg-white rounded-3xl p-8 shadow-xl">
                            <h3 class="text-xl font-black text-gray-900 mb-8 text-center">
                                <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Why Choose Our Pharmacy?
                            </h3>
                            
                            <div class="grid grid-cols-1 gap-6">
                                <!-- Trust Badge 1 -->
                                <div class="flex items-center gap-4 p-4 bg-green-50 rounded-xl">
                                    <div class="w-12 h-12 bg-trust-green rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-lg">100% Discreet Packaging</h4>
                                        <p class="text-gray-600">No one knows what's inside - completely private delivery</p>
                                    </div>
                                </div>
                                
                                <!-- Trust Badge 2 -->
                                <div class="flex items-center gap-4 p-4 bg-blue-50 rounded-xl">
                                    <div class="w-12 h-12 bg-medical-blue rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-lg">No Customs Problems</h4>
                                        <p class="text-gray-600">We handle all customs paperwork - zero hassle for you</p>
                                    </div>
                                </div>
                                
                                <!-- Trust Badge 3 -->
                                <div class="flex items-center gap-4 p-4 bg-purple-50 rounded-xl">
                                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-lg">Refund/Reship Guarantee</h4>
                                        <p class="text-gray-600">If seized by customs, we handle everything - reshipment or full refund</p>
                                    </div>
                                </div>

                                <!-- Trust Badge 4 -->
                                <div class="flex items-center gap-4 p-4 bg-green-50 rounded-xl">
                                    <div class="w-12 h-12 bg-trust-green rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-lg">Used by 1,000+ Satisfied Men</h4>
                                        <p class="text-gray-600">Trusted by customers across US, UK & Canada</p>
                                    </div>
                                </div>

                                <!-- FDA Badge -->
                                <div class="flex items-center gap-4 p-4 bg-blue-50 rounded-xl">
                                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-lg">FDA Approved Manufacturing</h4>
                                        <p class="text-gray-600">Produced in FDA-approved facilities with strict quality control standards</p>
                                    </div>
                                </div>

                                <!-- No Prescription Badge -->
                                <div class="flex items-center gap-4 p-4 bg-yellow-50 rounded-xl">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-lg">No Prescription Required</h4>
                                        <p class="text-gray-600">100% legal purchase - no doctor visits or embarrassing conversations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonials -->
                        <div class="bg-white rounded-3xl p-8 shadow-xl">
                            <h3 class="text-xl font-black text-gray-900 mb-8 text-center">
                                <svg class="icon icon-lg inline-block text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                Real Customer Reviews
                            </h3>
                            
                            <div class="space-y-6">
                                <div class="border-l-4 border-trust-green pl-4">
                                    <div class="flex items-center gap-3 mb-3">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=50&h=50&fit=crop&crop=face" alt="Mark" class="w-12 h-12 rounded-full">
                                        <div>
                                            <div class="flex items-center gap-1 mb-1">
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            </div>
                                            <p class="text-sm font-medium text-gray-500">Mar*** T., 42, Texas</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 font-medium text-base mb-3">
                                        "Perfect discreet packaging - no customs issues at all. Product works amazing, my confidence is back completely. Much cheaper than market prices!"
                                    </p>
                                </div>
                                
                                <div class="border-l-4 border-trust-green pl-4">
                                    <div class="flex items-center gap-3 mb-3">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=50&h=50&fit=crop&crop=face" alt="David" class="w-12 h-12 rounded-full">
                                        <div>
                                            <div class="flex items-center gap-1 mb-1">
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            </div>
                                            <p class="text-sm font-medium text-gray-500">Dav*** R., 38, London</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 font-medium text-base mb-3">
                                        "Ordered 10 packs, saved $53 compared to street prices. Package arrived safely, no questions asked. Will definitely order again!"
                                    </p>
                                </div>
                                
                                <div class="border-l-4 border-trust-green pl-4">
                                    <div class="flex items-center gap-3 mb-3">
                                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=50&h=50&fit=crop&crop=face" alt="Michael" class="w-12 h-12 rounded-full">
                                        <div>
                                            <div class="flex items-center gap-1 mb-1">
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            </div>
                                            <p class="text-sm font-medium text-gray-500">Mic*** K., 45, Toronto</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 font-medium text-base mb-3">
                                        "When my package got held at customs, they reshipped for free immediately. Amazing customer service and genuine products!"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- RIGHT COLUMN: Checkout Form -->
                    <div class="space-y-8">
                        
                        <!-- Order Bumps -->
                        <div class="space-y-4">
                            <h2 class="text-2xl font-black text-gray-900 text-center mb-6">
                                <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                                </svg>
                                Upgrade Your Health Package
                            </h2>
                            
                            <!-- Reset to Original Button for Desktop -->
                            <button onclick="resetToOriginalCart()" class="reset-to-original-btn w-full mb-4" id="desktop-reset-btn" style="display: none;">
                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                                </svg>
                                Back to Single Price ($2.49)
                            </button>
                            
                            <!-- Order Bump 1 -->
                            <div class="order-bump p-6 bg-white" onclick="selectOrderBump(1)" id="bump-1">
                                <div class="flex items-center gap-4">
                                    <div class="order-bump-radio" id="radio-1"></div>
                                    <div class="flex-1">
                                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                                            4 PILLS PER PACK 50mg
                                        </div>
                                        <div class="flex items-center gap-3 mb-2">
                                            <h3 class="text-xl font-black text-gray-900">
                                                2 Packs - Viagra 50mg
                                            </h3>
                                            <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                                POPULAR
                                            </span>
                                        </div>
                                        <p class="text-gray-600 text-base font-medium mb-3">
                                            Perfect for trying out - 8 pills total
                                        </p>
                                        <div class="flex items-center gap-4 mb-2">
                                            <span class="text-xl font-black text-trust-green">$4.98</span>
                                            <span class="text-lg line-through text-gray-400">$4.98</span>
                                            <span class="bg-convert-red text-white px-2 py-1 rounded-full text-xs font-bold">
                                                SAVE $0.00
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-sm text-trust-green font-bold">+ FREE SHIPPING</span>
                                            <span class="text-sm text-red-600 font-bold">
                                                (Market price: $7.47)
                                            </span>
                                        </div>
                                        <div class="mt-2">
                                            <span class="no-rx-badge">
                                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>
                                                No Prescription Required
                                            </span>
                                        </div>
                                    </div>
                                    <img 
                                        src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=100&h=100&fit=crop" 
                                        alt="2 Packs" 
                                        class="w-16 h-16 rounded-lg object-cover border-2 border-green-500"
                                    />
                                </div>
                            </div>
                            
                            <!-- Order Bump 2 -->
                            <div class="order-bump p-6 bg-white" onclick="selectOrderBump(2)" id="bump-2">
                                <div class="flex items-center gap-4">
                                    <div class="order-bump-radio" id="radio-2"></div>
                                    <div class="flex-1">
                                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                                            4 PILLS PER PACK 50mg
                                        </div>
                                        <div class="flex items-center gap-3 mb-2">
                                            <h3 class="text-xl font-black text-gray-900">
                                                5 Packs - Viagra 50mg
                                            </h3>
                                            <span class="bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                                BEST VALUE
                                            </span>
                                        </div>
                                        <p class="text-gray-600 text-base font-medium mb-3">
                                            Most popular choice - 20 pills total
                                        </p>
                                        <div class="flex items-center gap-4 mb-2">
                                            <span class="text-xl font-black text-trust-green">$12.45</span>
                                            <span class="text-lg line-through text-gray-400">$12.45</span>
                                            <span class="bg-convert-red text-white px-2 py-1 rounded-full text-xs font-bold">
                                                SAVE $0.00
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-sm text-trust-green font-bold">+ FREE SHIPPING</span>
                                            <span class="text-sm text-red-600 font-bold">
                                                (Market price: $18.70)
                                            </span>
                                        </div>
                                        <div class="mt-2">
                                            <span class="no-rx-badge">
                                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>
                                                No Prescription Required
                                            </span>
                                        </div>
                                    </div>
                                    <img 
                                        src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=100&h=100&fit=crop" 
                                        alt="5 Packs" 
                                        class="w-16 h-16 rounded-lg object-cover border-2 border-orange-500"
                                    />
                                </div>
                            </div>
                            
                            <!-- Order Bump 3 -->
                            <div class="order-bump p-6 bg-white" onclick="selectOrderBump(3)" id="bump-3">
                                <div class="flex items-center gap-4">
                                    <div class="order-bump-radio" id="radio-3"></div>
                                    <div class="flex-1">
                                        <div class="bg-trust-green text-white px-2 py-1 rounded-full text-xs font-bold mb-2 inline-block">
                                            4 PILLS PER PACK 50mg
                                        </div>
                                        <div class="flex items-center gap-3 mb-2">
                                            <h3 class="text-xl font-black text-gray-900">
                                                10 Packs - Viagra 50mg
                                            </h3>
                                            <span class="bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                                PREMIUM
                                            </span>
                                        </div>
                                        <p class="text-gray-600 text-base font-medium mb-3">
                                            Maximum savings - 40 pills total
                                        </p>
                                        <div class="flex items-center gap-4 mb-2">
                                            <span class="text-xl font-black text-trust-green">$24.90</span>
                                            <span class="text-lg line-through text-gray-400">$24.90</span>
                                            <span class="bg-convert-red text-white px-2 py-1 rounded-full text-xs font-bold">
                                                SAVE $0.00
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-sm text-trust-green font-bold">+ FREE SHIPPING</span>
                                            <span class="text-sm text-red-600 font-bold">
                                                (Market price: $37.35)
                                            </span>
                                        </div>
                                        <div class="mt-2">
                                            <span class="no-rx-badge">
                                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>
                                                No Prescription Required
                                            </span>
                                        </div>
                                    </div>
                                    <img 
                                        src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=100&h=100&fit=crop" 
                                        alt="10 Packs" 
                                        class="w-16 h-16 rounded-lg object-cover border-2 border-purple-500"
                                    />
                                </div>
                            </div>
                        </div>
                        
                        <!-- Trust Badges -->
                        <div class="bg-gray-50 rounded-2xl p-6">
                            <div class="text-center mb-6">
                                <h3 class="font-black text-gray-900 mb-4 text-lg">
                                    <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    100% Secure SSL Encrypted Checkout
                                </h3>
                                <p class="text-base text-gray-600 mb-6">
                                    We never store your card information
                                </p>
                            </div>
                            
                            <div class="flex items-center justify-center gap-6 flex-wrap">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="h-8">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-8">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Stripe_Logo%2C_revised_2016.svg" alt="Stripe" class="h-8">
                            </div>
                        </div>
                        
                        <!-- Checkout Form -->
                        <div class="bg-white rounded-3xl p-6 shadow-xl border border-trust-green/20">
                            <h3 class="text-xl font-black text-gray-900 mb-8 text-center">
                                <svg class="icon icon-lg inline-block text-medical-blue" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                Billing Information
                            </h3>
                            
                            <form id="desktop-checkout-form" class="checkout-form" novalidate>
                                
                                <div class="space-y-6">
                                    <!-- Billing Fields -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-base font-bold text-gray-700 mb-2">First Name *</label>
                                            <input type="text" name="billing_first_name" class="form-input w-full" required>
                                            <span class="error-message" id="error-billing_first_name"></span>
                                        </div>
                                        <div>
                                            <label class="block text-base font-bold text-gray-700 mb-2">Last Name *</label>
                                            <input type="text" name="billing_last_name" class="form-input w-full" required>
                                            <span class="error-message" id="error-billing_last_name"></span>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-base font-bold text-gray-700 mb-2">Email Address *</label>
                                        <input type="email" name="billing_email" class="form-input w-full" required>
                                        <span class="error-message" id="error-billing_email"></span>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-base font-bold text-gray-700 mb-2">Phone Number *</label>
                                        <div class="phone-input-container">
                                            <select name="phone_country_code" class="form-input country-code-select" required>
                                                <option value="+1" selected>🇺🇸 +1</option>
                                                <option value="+44">🇬🇧 +44</option>
                                                <option value="+1">🇨🇦 +1</option>
                                            </select>
                                            <input type="tel" name="billing_phone" class="form-input phone-number-input" placeholder="123-456-7890" required>
                                        </div>
                                        <span class="error-message" id="error-billing_phone"></span>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-base font-bold text-gray-700 mb-2">Address *</label>
                                        <input type="text" name="billing_address_1" class="form-input w-full" required>
                                        <span class="error-message" id="error-billing_address_1"></span>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-base font-bold text-gray-700 mb-2">City *</label>
                                            <input type="text" name="billing_city" class="form-input w-full" required>
                                            <span class="error-message" id="error-billing_city"></span>
                                        </div>
                                        <div>
                                            <label class="block text-base font-bold text-gray-700 mb-2">Postal Code *</label>
                                            <input type="text" name="billing_postcode" class="form-input w-full" required>
                                            <span class="error-message" id="error-billing_postcode"></span>
                                        </div>
                                    </div>
                                    
                                    <!-- Country Field -->
                                    <div>
                                        <label class="block text-base font-bold text-gray-700 mb-2">Country *</label>
                                        <select name="billing_country" class="form-input w-full" required>
                                            <option value="US" selected>🇺🇸 United States</option>
                                            <option value="GB">🇬🇧 United Kingdom</option>
                                            <option value="CA">🇨🇦 Canada</option>
                                        </select>
                                        <span class="error-message" id="error-billing_country"></span>
                                    </div>
                                </div>
                                
                                <!-- Payment Method -->
                                <div class="mt-12">
                                    <h3 class="text-xl font-black text-gray-900 mb-8 text-center">
                                        <svg class="icon icon-lg inline-block text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                                        </svg>
                                        Payment Method
                                    </h3>
                                    
                                    <div class="space-y-6" id="payment-methods-container">
                                        <!-- Credit Card -->
                                        <div class="payment-method-wrapper border-2 border-gray-200 rounded-xl overflow-hidden hover:border-trust-green transition-colors selected" data-gateway="stripe">
                                            <label class="flex items-center gap-4 p-6 cursor-pointer">
                                                <input type="radio" name="payment_method" value="stripe" class="w-5 h-5 text-trust-green payment-method-radio" checked>
                                                <div class="flex items-center gap-4 flex-wrap">
                                                    <span class="text-xl">
                                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                                                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </span>
                                                    <span class="font-bold text-lg">Credit Card</span>
                                                    <div class="flex gap-3">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="h-6">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-6">
                                                    </div>
                                                </div>
                                            </label>
                                            
                                            <!-- Payment Gateway Form -->
                                            <div class="payment-form-container" id="payment-form-stripe" style="display: block;">
                                                <div class="p-6 pt-0 border-t border-gray-200">
                                                    <div class="space-y-4">
                                                        <div>
                                                            <label class="block text-base font-bold text-gray-700 mb-2">Card Number *</label>
                                                            <input type="text" name="card_number" class="form-input w-full" placeholder="1234 5678 9012 3456" required>
                                                        </div>
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div>
                                                                <label class="block text-base font-bold text-gray-700 mb-2">Expiry Date *</label>
                                                                <input type="text" name="card_expiry" class="form-input w-full" placeholder="MM/YY" required>
                                                            </div>
                                                            <div>
                                                                <label class="block text-base font-bold text-gray-700 mb-2">CVC *</label>
                                                                <input type="text" name="card_cvc" class="form-input w-full" placeholder="123" required>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="block text-base font-bold text-gray-700 mb-2">Cardholder Name *</label>
                                                            <input type="text" name="card_name" class="form-input w-full" placeholder="John Doe" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="error-message" id="error-payment_method"></span>

                                    <!-- Bank Statement Info for Desktop -->
                                    <div class="bank-statement-info">
                                        <h3>
                                            <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H7z"/>
                                            </svg>
                                            Bank Statement Descriptor
                                        </h3>
                                        <p>This charge will appear as "<strong>VHealthLLC</strong>" on your statement for complete discretion and privacy.</p>
                                    </div>
                                </div>
                                
                                <!-- Countdown Near Button -->
                                <div class="text-center mt-8 mb-6">
                                    <p class="text-base text-convert-red font-bold">
                                        <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                        Only <span id="countdown-mini">4:53</span> left to secure your discount
                                    </p>
                                </div>
                                
                                <!-- Hidden field to store selected package -->
                                <input type="hidden" id="selected_package_id" name="selected_package_id" value="">
                                
                                <!-- Main CTA Button -->
                                <button type="button" onclick="submitCheckoutForm('desktop')" id="desktop-submit-btn" class="btn-primary w-full text-white text-xl py-6 mb-8">
                                    <svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Yes, I Want To Complete My Order
                                </button>
                                
                                <!-- Security Reassurance -->
                                <div class="text-center text-base text-gray-600">
                                    <div class="flex items-center justify-center gap-6 flex-wrap">
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                            </svg>
                                            256-bit SSL Secure
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Guaranteed Delivery
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                            <span id="desktop-shipping-guarantee">Free Shipping</span>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mock data for prototype
        const orderBumpPackages = {
            1: {
                title: '2 Packs - Viagra 50mg',
                discreet_title: 'Viagra 50mg',
                quantity: 2,
                pills_total: 8,
                price: 4.98,
                black_market_price: 7.47,
                badge: 'POPULAR',
                badge_color: 'green-500'
            },
            2: {
                title: '5 Packs - Viagra 50mg',
                discreet_title: 'Viagra 50mg',
                quantity: 5,
                pills_total: 20,
                price: 12.45,
                black_market_price: 18.70,
                badge: 'BEST VALUE',
                badge_color: 'orange-500'
            },
            3: {
                title: '10 Packs - Viagra 50mg',
                discreet_title: 'Viagra 50mg',
                quantity: 10,
                pills_total: 40,
                price: 24.90,
                black_market_price: 37.35,
                badge: 'PREMIUM',
                badge_color: 'purple-500'
            }
        };

        const currentCartInfo = {
            discreet_title: 'Viagra 50mg',
            quantity: 1,
            price: 2.49
        };

        let selectedPackageId = null;
        let isOrderBumpSelected = false;

        // Video reviews data with masked names
        const videoReviews = [
            { title: "Mar*** from Texas", description: "My confidence is back completely!", rating: 5 },
            { title: "Dav*** from London", description: "Works perfectly every time!", rating: 5 },
            { title: "Mic*** from Toronto", description: "Best health enhancer I've used!", rating: 5 },
            { title: "Jam*** from California", description: "Amazing results, fast delivery!", rating: 5 },
            { title: "Rob*** from New York", description: "Life-changing confidence boost!", rating: 5 }
        ];

        let currentVideoIndex = 0;

        // Video popup functions
        function showVideoPopup() {
            const popup = document.getElementById('videoPopup');
            popup.style.display = 'flex';
            popup.classList.add('show');
            updateVideoDisplay();
        }

        function closeVideoPopup() {
            const popup = document.getElementById('videoPopup');
            popup.classList.remove('show');
            setTimeout(() => {
                popup.style.display = 'none';
            }, 300);
        }

        function nextVideo() {
            if (currentVideoIndex < videoReviews.length - 1) {
                currentVideoIndex++;
                updateVideoDisplay();
            }
        }

        function previousVideo() {
            if (currentVideoIndex > 0) {
                currentVideoIndex--;
                updateVideoDisplay();
            }
        }

        function goToVideo(index) {
            currentVideoIndex = index;
            updateVideoDisplay();
        }

        function updateVideoDisplay() {
            const video = videoReviews[currentVideoIndex];
            document.getElementById('videoTitle').textContent = video.title;
            document.getElementById('videoDescription').textContent = video.description;
            
            // Update navigation buttons
            document.getElementById('prevBtn').disabled = currentVideoIndex === 0;
            document.getElementById('nextBtn').disabled = currentVideoIndex === videoReviews.length - 1;
            
            // Update indicators
            const indicators = document.querySelectorAll('.indicator');
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentVideoIndex);
                indicator.onclick = () => goToVideo(index);
            });
        }

        // Real-time purchase notifications with masked names
        const purchaseNotifications = [
            { name: "Mar*** from Texas", packs: "5 packs", time: "2 minutes ago" },
            { name: "Dav*** from London", packs: "10 packs", time: "4 minutes ago" },
            { name: "Mic*** from Toronto", packs: "2 packs", time: "1 minute ago" },
            { name: "Jam*** from California", packs: "5 packs", time: "3 minutes ago" },
            { name: "Rob*** from Manchester", packs: "10 packs", time: "5 minutes ago" },
            { name: "Chr*** from Vancouver", packs: "2 packs", time: "6 minutes ago" },
            { name: "Ste*** from Florida", packs: "20 packs", time: "2 minutes ago" },
            { name: "Pau*** from Birmingham", packs: "10 packs", time: "4 minutes ago" }
        ];

        let usedNotifications = new Set();
        let notificationTimeout;

        function getRandomNotification() {
            if (usedNotifications.size >= purchaseNotifications.length) {
                usedNotifications.clear();
            }
            
            let availableNotifications = purchaseNotifications.filter((_, index) => !usedNotifications.has(index));
            let randomIndex = Math.floor(Math.random() * availableNotifications.length);
            let selectedNotification = availableNotifications[randomIndex];
            
            let originalIndex = purchaseNotifications.indexOf(selectedNotification);
            usedNotifications.add(originalIndex);
            
            return selectedNotification;
        }

        function showPurchaseNotification() {
            const notification = document.getElementById('purchaseNotification');
            const textElement = document.getElementById('notificationText');
            const timeElement = document.getElementById('notificationTime');
            
            if (notification && textElement && timeElement) {
                const randomNotification = getRandomNotification();
                
                const randomMinutes = Math.floor(Math.random() * 8) + 1;
                const timeText = randomMinutes === 1 ? "1 minute ago" : `${randomMinutes} minutes ago`;
                
                textElement.textContent = `${randomNotification.name} just ordered ${randomNotification.packs}`;
                timeElement.textContent = timeText;
                
                notification.classList.add('show');
                
                clearTimeout(notificationTimeout);
                notificationTimeout = setTimeout(() => {
                    notification.classList.remove('show');
                }, 5000);
            }
        }

        function closePurchaseNotification() {
            const notification = document.getElementById('purchaseNotification');
            notification.classList.remove('show');
            clearTimeout(notificationTimeout);
        }

        // Desktop order bump selection
        function selectOrderBump(packageId) {
            console.log('Selecting order bump:', packageId);
            
            document.querySelectorAll('.order-bump').forEach(bump => {
                bump.classList.remove('selected');
            });
            
            document.querySelectorAll('.order-bump-radio').forEach(radio => {
                radio.classList.remove('checked');
            });
            
            const selectedBump = document.getElementById(`bump-${packageId}`);
            const selectedRadio = document.getElementById(`radio-${packageId}`);
            
            if (selectedBump && selectedRadio) {
                selectedBump.classList.add('selected');
                selectedRadio.classList.add('checked');
            }
            
            selectedPackageId = packageId;
            isOrderBumpSelected = true;
            
            const hiddenFields = document.querySelectorAll('#selected_package_id');
            hiddenFields.forEach(field => {
                field.value = packageId;
            });
            
            updateProductDisplay(packageId);
            showResetButton();
        }

        // Mobile package selection
        function selectMobilePackage(packageId, title, price) {
            console.log('Selecting mobile package:', packageId, title, price);
            
            document.querySelectorAll('.mobile-package-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            event.target.closest('.mobile-package-card').classList.add('selected');
            
            selectedPackageId = packageId;
            isOrderBumpSelected = true;
            
            const hiddenFields = document.querySelectorAll('#selected_package_id');
            hiddenFields.forEach(field => {
                field.value = packageId;
            });
            
            const mobileTitle = document.getElementById('mobile-product-title');
            const mobilePrice = document.getElementById('mobile-product-price');
            const mobileBlackMarketPrice = document.getElementById('mobile-black-market-price');
            
            const package = orderBumpPackages[packageId];
            if (package) {
                if (mobileTitle) mobileTitle.textContent = package.discreet_title;
                if (mobilePrice) mobilePrice.textContent = `$${package.price.toFixed(2)}`;
                if (mobileBlackMarketPrice) mobileBlackMarketPrice.textContent = `$${package.black_market_price.toFixed(2)}`;
            }
            
            updateProductDisplay(packageId);
            showResetButton();
        }

        // Show reset button
        function showResetButton() {
            const mobileResetBtn = document.getElementById('mobile-reset-btn');
            const desktopResetBtn = document.getElementById('desktop-reset-btn');
            
            if (mobileResetBtn) mobileResetBtn.style.display = 'block';
            if (desktopResetBtn) desktopResetBtn.style.display = 'block';
        }

        // Hide reset button
        function hideResetButton() {
            const mobileResetBtn = document.getElementById('mobile-reset-btn');
            const desktopResetBtn = document.getElementById('desktop-reset-btn');
            
            if (mobileResetBtn) mobileResetBtn.style.display = 'none';
            if (desktopResetBtn) desktopResetBtn.style.display = 'none';
        }

        // Update product display with package information
        function updateProductDisplay(packageId) {
            const package = orderBumpPackages[packageId];
            if (!package) {
                console.error('Package not found:', packageId);
                return;
            }
            
            console.log('Updating display with package:', package);
            
            const desktopTitle = document.getElementById('desktop-product-title');
            if (desktopTitle) {
                desktopTitle.textContent = package.discreet_title;
            }

            const desktopPillsInfo = document.getElementById('desktop-pills-info');
            if (desktopPillsInfo) {
                desktopPillsInfo.textContent = `${package.pills_total} pills total (4 PILLS PER PACK 50mg)`;
            }
            
            const cartItemTitle = document.getElementById('cart-item-title');
            const cartItemQuantity = document.getElementById('cart-item-quantity');
            const cartItemTotal = document.getElementById('cart-item-total');
            const cartItemPills = document.getElementById('cart-item-pills');
            const cartBlackMarketPrice = document.getElementById('cart-black-market-price');
            
            if (cartItemTitle) cartItemTitle.textContent = package.discreet_title;
            if (cartItemQuantity) cartItemQuantity.textContent = `Quantity: ${package.quantity}`;
            if (cartItemTotal) cartItemTotal.textContent = `$${package.price.toFixed(2)}`;
            if (cartItemPills) cartItemPills.textContent = `${package.pills_total} pills total`;
            if (cartBlackMarketPrice) cartBlackMarketPrice.textContent = `Market price: $${package.black_market_price.toFixed(2)}`;
            
            const subtotalElement = document.getElementById('desktop-subtotal');
            const shippingElement = document.getElementById('desktop-shipping-cost');
            const totalElement = document.getElementById('desktop-total');
            const shippingGuarantee = document.getElementById('desktop-shipping-guarantee');
            
            if (subtotalElement) subtotalElement.textContent = `$${package.price.toFixed(2)}`;
            if (shippingElement) {
                shippingElement.textContent = 'FREE';
                shippingElement.classList.add('text-trust-green');
            }
            if (totalElement) totalElement.textContent = `$${package.price.toFixed(2)}`;
            if (shippingGuarantee) shippingGuarantee.textContent = 'Free Shipping';
        }

        // Reset to original cart display
        function resetToOriginalCart() {
            console.log('Resetting to original cart');
            
            selectedPackageId = null;
            isOrderBumpSelected = false;
            
            const hiddenFields = document.querySelectorAll('#selected_package_id');
            hiddenFields.forEach(field => {
                field.value = '';
            });
            
            document.querySelectorAll('.order-bump').forEach(bump => {
                bump.classList.remove('selected');
            });
            
            document.querySelectorAll('.order-bump-radio').forEach(radio => {
                radio.classList.remove('checked');
            });
            
            document.querySelectorAll('.mobile-package-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            hideResetButton();
            
            if (!currentCartInfo || !currentCartInfo.discreet_title) return;
            
            const desktopTitle = document.getElementById('desktop-product-title');
            if (desktopTitle) {
                desktopTitle.textContent = currentCartInfo.discreet_title;
            }

            const desktopPillsInfo = document.getElementById('desktop-pills-info');
            if (desktopPillsInfo) {
                desktopPillsInfo.textContent = '4 PILLS PER PACK 50mg';
            }
            
            const cartItemTitle = document.getElementById('cart-item-title');
            const cartItemQuantity = document.getElementById('cart-item-quantity');
            const cartItemTotal = document.getElementById('cart-item-total');
            const cartItemPills = document.getElementById('cart-item-pills');
            const cartBlackMarketPrice = document.getElementById('cart-black-market-price');
            
            if (cartItemTitle) cartItemTitle.textContent = currentCartInfo.discreet_title;
            if (cartItemQuantity) cartItemQuantity.textContent = `Quantity: ${currentCartInfo.quantity}`;
            if (cartItemTotal) cartItemTotal.textContent = `$${currentCartInfo.price.toFixed(2)}`;
            if (cartItemPills) cartItemPills.textContent = '4 PILLS PER PACK 50mg';
            if (cartBlackMarketPrice) cartBlackMarketPrice.textContent = `Market price: $${(currentCartInfo.price * 1.5).toFixed(2)}`;
            
            const subtotalElement = document.getElementById('desktop-subtotal');
            const shippingElement = document.getElementById('desktop-shipping-cost');
            const totalElement = document.getElementById('desktop-total');
            const shippingGuarantee = document.getElementById('desktop-shipping-guarantee');
            
            if (subtotalElement) subtotalElement.textContent = `$${currentCartInfo.price.toFixed(2)}`;
            if (shippingElement) {
                shippingElement.textContent = 'FREE';
                shippingElement.classList.add('text-trust-green');
            }
            if (totalElement) totalElement.textContent = `$${currentCartInfo.price.toFixed(2)}`;
            if (shippingGuarantee) shippingGuarantee.textContent = 'Free Shipping';
            
            const mobileTitle = document.getElementById('mobile-product-title');
            const mobilePrice = document.getElementById('mobile-product-price');
            const mobileBlackMarketPrice = document.getElementById('mobile-black-market-price');
            
            if (mobileTitle) mobileTitle.textContent = currentCartInfo.discreet_title;
            if (mobilePrice) mobilePrice.textContent = `$${currentCartInfo.price.toFixed(2)}`;
            if (mobileBlackMarketPrice) mobileBlackMarketPrice.textContent = `$${(currentCartInfo.price * 1.5).toFixed(2)}`;
        }

        // Submit checkout form (prototype - just shows alert)
        function submitCheckoutForm(source) {
            console.log('Submitting checkout form from:', source);
            
            const loadingOverlay = document.getElementById('loadingOverlay');
            const submitButtons = document.querySelectorAll('#mobile-submit-btn, #desktop-submit-btn');
            
            loadingOverlay.classList.add('active');
            submitButtons.forEach(btn => {
                btn.disabled = true;
                btn.innerHTML = '⏳ Processing Your Order...';
            });
            
            // Simulate processing
            setTimeout(() => {
                loadingOverlay.classList.remove('active');
                submitButtons.forEach(btn => {
                    btn.disabled = false;
                    btn.innerHTML = '<svg class="icon icon-sm inline-block" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg> Yes, I Want To Complete My Order';
                });
                alert('This is a prototype! In a real implementation, this would process the order.');
            }, 2000);
        }

        // Countdown timer
        function initCountdown() {
            const countdownElement = document.getElementById('countdown');
            const countdownMini = document.getElementById('countdown-mini');
            const mobileCountdown = document.getElementById('mobile-countdown');
            const mobileCountdownMini = document.getElementById('mobile-countdown-mini');
            
            let timeLeft = 4 * 3600 + 59 * 60 + 32; // 4:59:32 in seconds

            function updateCountdown() {
                const hours = Math.floor(timeLeft / 3600);
                const minutes = Math.floor((timeLeft % 3600) / 60);
                const seconds = timeLeft % 60;

                const timeString = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                const miniTimeString = `${minutes}:${seconds.toString().padStart(2, '0')}`;

                if (countdownElement) countdownElement.textContent = timeString;
                if (countdownMini) countdownMini.textContent = miniTimeString;
                if (mobileCountdown) mobileCountdown.textContent = timeString;
                if (mobileCountdownMini) mobileCountdownMini.textContent = miniTimeString;

                if (timeLeft > 0) {
                    timeLeft--;
                } else {
                    timeLeft = 4 * 3600 + 59 * 60 + 32; // Reset
                }
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }

        // Form validation and enhancement
        function enhanceForm() {
            const inputs = document.querySelectorAll('.form-input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.borderColor = '#3CB371';
                    this.style.boxShadow = '0 0 0 3px rgba(60, 179, 113, 0.1)';
                    this.classList.remove('error');
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.style.borderColor = '#e2e8f0';
                        this.style.boxShadow = 'none';
                    }
                });
            });
        }

        // Show notifications every 12-20 seconds
        setInterval(() => {
            if (Math.random() > 0.2) { // 80% chance to show
                showPurchaseNotification();
            }
        }, Math.random() * 8000 + 12000); // Random between 12-20 seconds

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initCountdown();
            enhanceForm();
            
            // Set initial display to original cart
            resetToOriginalCart();

            // Show video popup after 3 seconds
            setTimeout(() => {
                showVideoPopup();
            }, 3000);

            // Show first purchase notification after 8 seconds
            setTimeout(() => {
                showPurchaseNotification();
            }, 8000);
        });
    </script>
</body>

</html>
