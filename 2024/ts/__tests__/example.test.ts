import {describe, expect, test} from '@jest/globals';

describe('sum module', () => {
  test('adds 1 + 2 to equal 3', () => {
    expect(sum(1, 2)).toBe(3);
  });
});

/**
 * Sum two numbers
 * 
 * @function sum
 * @param {number} a First number
 * @param {number} b Second number
 * @returns {number} Result of the sum
 */
function sum(a: number, b: number): number {
  return a + b;
}