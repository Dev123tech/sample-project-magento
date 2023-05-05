Synamen Google Content
I. Introduction

This extension is designed to help Magento store owners easily export their products to Google Merchant account using Content API. With this extension, If  store owners Save or update products that product Automatically send to Google Merchant Center , map Magento product attributes to Google Merchant attributes, and start the export process with just a few clicks.

The extension is built on top of Google's Content API, which provides a programmatic way to manage product listings on Google Shopping. This API allows the extension to securely connect to a store owner's Google Merchant account and manage product listings without requiring manual updates.

The extension provides a user-friendly interface for configuring the connection to the Google Merchant account, mapping product attributes, and starting the export process. Store owners can easily select which products they want to export, set up the mapping between Magento and Google Merchant attributes, and start the export process.

II. System Specification
- Build In Magento 2.4.5
- Php 8.1

III. Installation
- For Installation of Synamen_GoogleContent Extension You need to Unzip Module file in app/code

- Install Google Api using in root directory
	composer require google/apiclient:^2.0




IV. Usage
For Accessing the extension go to 

-Magento Dashboard > Synamen > Synamen Configuration




After Clicking on Synamen Configuration You will see this interface


1) Enable Setting to Yes



2) Add Google Merchant Id , which showing in Right Corner in Google Merchant Center




3) Upload API key file which generated from Google Console


4)Add Target Country then Save Setting


- How to use the extension

Go to Magento Dashboard > Synamen > Synamen Feed Category Mapping


1) Click On Add Mapping 


2) Add Title Which You want to create and Keep the Type Google by default Then Click on Get Category


3) Click On Add Value Then Map Your Magento Category With Google Feed Category Then Click on Save


Steps for Attribute Mapping 

Go to Magento Dashboard > Synamen > Synamen Attribute Mapping


After Clicking on Synamen Attribute Mapping You’ll see this interface

In Section Magento Attribute  You’ll see all Magento Product Attribute and In Google Attribute Section You’ll See all Google Product Attributes.


-How to Check
1) After Adding New product or Updating Existing Product It will Automatically Updated on the Google Merchant Account   