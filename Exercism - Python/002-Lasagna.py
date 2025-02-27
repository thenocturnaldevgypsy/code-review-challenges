"""
Functions used in preparing Guido's gorgeous lasagna.

Learn about Guido, the creator of the Python language:
https://en.wikipedia.org/wiki/Guido_van_Rossum

This is a module docstring, used to describe the functionality
of a module and its functions and/or classes.
"""

# 1. Define the 'EXPECTED_BAKE_TIME' constant
EXPECTED_BAKE_TIME = 40  # Lasagna should bake for 40 minutes

# 2. Implement the 'bake_time_remaining()' function
def bake_time_remaining(elapsed_bake_time: int) -> int:
    """
    Calculate the bake time remaining.

    :param elapsed_bake_time: int - baking time already elapsed.
    :return: int - remaining bake time (in minutes) derived from 'EXPECTED_BAKE_TIME'.

    This function takes the actual minutes the lasagna has been in the oven as
    an argument and returns how many minutes the lasagna still needs to bake
    based on the EXPECTED_BAKE_TIME.
    """
    return EXPECTED_BAKE_TIME - elapsed_bake_time

# 3. Implement the 'preparation_time_in_minutes()' function
def preparation_time_in_minutes(number_of_layers: int) -> int:
    """
    Calculate the preparation time based on the number of layers.

    :param number_of_layers: int - the number of layers to be added.
    :return: int - total preparation time (in minutes), assuming each layer takes 2 minutes.

    This function calculates the preparation time for the lasagna, assuming each layer
    takes 2 minutes to prepare.
    """
    PREPARATION_TIME = 2  # 2 minutes per layer
    return number_of_layers * PREPARATION_TIME

# 4. Implement the 'elapsed_time_in_minutes()' function
def elapsed_time_in_minutes(number_of_layers: int, elapsed_bake_time: int) -> int:
    """
    Calculate the total elapsed cooking time (preparation + bake time).

    :param number_of_layers: int - the number of layers in the lasagna.
    :param elapsed_bake_time: int - the baking time already elapsed.
    :return: int - total elapsed time (in minutes) spent preparing and cooking.

    This function calculates the total elapsed time by adding the preparation time
    (based on the number of layers) and the baking time that has already elapsed.
    """
    return preparation_time_in_minutes(number_of_layers) + elapsed_bake_time