#!/usr/bin/env node

const fs = require('fs');
const path = require('path');

const composerPath = path.join(__dirname, 'composer.json');

// Read composer.json
try {
  const composerJson = JSON.parse(fs.readFileSync(composerPath, 'utf8'));
  
  // Add name if missing
  if (!composerJson.name) {
    composerJson.name = 'fastcomments/client';
    console.log('Added missing name to composer.json');
  }

  composerJson.keywords.push(...['fastcomments', 'live-commenting', 'comments-api', 'comments']);

  // Format the output with 4 spaces indentation and write back
  fs.writeFileSync(composerPath, JSON.stringify(composerJson, null, 4) + '\n');
  console.log('composer.json updated successfully');
} catch (error) {
  console.error('Error updating composer.json:', error);
  process.exit(1);
}